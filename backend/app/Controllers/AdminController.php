<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProductModel;
use App\Models\InventoryModel;
use App\Models\SaleModel;
use App\Models\RestockRequestModel;

class AdminController extends BaseController
{
    public function dashboard()
    {
        $users = new UserModel();
        $products = new ProductModel();
        $inventory = new InventoryModel();
        $sales = new SaleModel();
        $restockRequestsModel = new RestockRequestModel();

        $restockRequests = $restockRequestsModel
            ->select('restock_requests.*, products.name AS product_name')
            ->join(
                'products',
                'products.id = restock_requests.product_id',
                'left'
            )
            ->where('restock_requests.status', 'pending')
            ->orderBy('restock_requests.created_at', 'DESC')
            ->findAll();

        $recentActivity = [];

        /*
         * New customer orders
         */
        $orders = $sales
            ->select('sales.*, users.first_name, users.last_name')
            ->join('users', 'users.id = sales.user_id', 'left')
            ->orderBy('sales.created_at', 'DESC')
            ->findAll(5);

        foreach ($orders as $order) {
            $customerName = trim(
                ($order['first_name'] ?? '') . ' ' .
                    ($order['last_name'] ?? '')
            );

            $recentActivity[] = [
                'icon' => '🛒',
                'message' => 'New order #' . $order['id'] .
                    ' placed by ' .
                    ($customerName ?: 'Customer'),
                'date' => $order['created_at'],
                'class' => 'bg-green-50 border-green-500',
            ];
        }

        /*
         * New supplier deliveries
         */
        $supplies = $inventory
            ->select('inventory.*, products.name AS product_name')
            ->join(
                'products',
                'products.id = inventory.product_id',
                'left'
            )
            ->where('inventory.movement_type', 'IN')
            ->like('inventory.remarks', 'Supplier delivery', 'after')
            ->orderBy('inventory.created_at', 'DESC')
            ->findAll(5);

        foreach ($supplies as $supply) {
            $recentActivity[] = [
                'icon' => '📦',
                'message' => 'New supply received: ' .
                    ($supply['product_name'] ?? 'Product') .
                    ' +' . $supply['quantity'] . ' units',
                'date' => $supply['created_at'],
                'class' => 'bg-blue-50 border-blue-500',
            ];
        }

        /*
         * Low-stock products
         */
        $lowStockProducts = $products
            ->where('stock <=', 10)
            ->orderBy('stock', 'ASC')
            ->findAll(5);

        foreach ($lowStockProducts as $product) {
            $recentActivity[] = [
                'icon' => '⚠️',
                'message' => 'Low stock: ' .
                    $product['name'] .
                    ' (' . $product['stock'] . ' remaining)',
                'date' => $product['updated_at']
                    ?? date('Y-m-d H:i:s'),
                'class' => 'bg-yellow-50 border-yellow-500',
            ];
        }

        /*
         * Customer restock requests
         */
        foreach ($restockRequests as $request) {
            $recentActivity[] = [
                'type' => 'restock_request',
                'icon' => '🔔',
                'message' => 'New stock request',
                'company_name' => $request['company_name'] ?? 'Unknown company',
                'product_name' => $request['product_name'] ?? 'Unknown product',
                'quantity' => $request['quantity'] ?? 0,
                'needed_by' => $request['needed_by'] ?? 'Not specified',
                'requester_name' => $request['name'] ?? 'Unknown requester',
                'requester_email' => $request['email'] ?? 'No email',
                'date' => $request['created_at'],
                'class' => 'bg-red-50 border-red-500',
            ];
        }

        usort($recentActivity, function ($first, $second) {
            return strtotime($second['date'])
                <=> strtotime($first['date']);
        });

        $recentActivity = array_slice($recentActivity, 0, 10);

        return view('admin/dashboard', [
            'users' => $users->countAll(),
            'products' => $products->countAll(),
            'inventory' => $inventory->countAll(),
            'sales' => $sales->countAll(),

            'restockRequests' => $restockRequests,
            'restockCount' => count($restockRequests),

            'recentActivity' => $recentActivity,
        ]);
    }

    public function inventory()
    {
        $productModel = new ProductModel();

        return view('admin/inventory', [
            'products' => $productModel->findAll(),

            'inStock' => $productModel
                ->where('stock >', 10)
                ->countAllResults(),

            'lowStock' => $productModel
                ->where('stock <=', 10)
                ->where('stock >', 0)
                ->countAllResults(),

            'outOfStock' => $productModel
                ->where('stock', 0)
                ->countAllResults(),
        ]);
    }

    public function sales()
    {
        $db = db_connect();

        $rows = $db->table('sales s')
            ->select([
                's.id AS order_id',
                's.total_amount',
                's.status',
                's.created_at',
                'u.first_name',
                'u.last_name',
                'u.email',
                'si.quantity',
                'si.price',
                'si.subtotal',
                'p.name AS product_name',
            ])
            ->join('users u', 'u.id = s.user_id', 'left')
            ->join('sale_items si', 'si.sale_id = s.id', 'left')
            ->join('products p', 'p.id = si.product_id', 'left')
            ->orderBy('s.created_at', 'DESC')
            ->get()
            ->getResultArray();

        $orders = [];

        foreach ($rows as $row) {
            $orderId = $row['order_id'];

            if (!isset($orders[$orderId])) {
                $orders[$orderId] = [
                    'id' => $orderId,
                    'customer_name' => trim(
                        ($row['first_name'] ?? '') . ' ' .
                            ($row['last_name'] ?? '')
                    ),
                    'email' => $row['email'] ?? '',
                    'total_amount' => $row['total_amount'],
                    'status' => $row['status'],
                    'created_at' => $row['created_at'],
                    'items' => [],
                ];
            }

            $orders[$orderId]['items'][] = [
                'product_name' => $row['product_name'],
                'quantity' => $row['quantity'],
                'price' => $row['price'],
                'subtotal' => $row['subtotal'],
            ];
        }

        return view('admin/sales', [
            'orders' => array_values($orders),
        ]);
    }
}
