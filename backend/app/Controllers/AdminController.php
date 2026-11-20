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

        $data = [
            'users'           => $users->countAll(),
            'products'        => $products->countAll(),
            'inventory'       => $inventory->countAll(),
            'sales'           => $sales->countAll(),
            'restockRequests' => $restockRequests,
            'restockCount'    => count($restockRequests),
        ];

        return view('admin/dashboard', $data);
    }

    public function inventory()
    {
        $productModel = new ProductModel();

        $data = [
            'products'   => $productModel->findAll(),
            'inStock'    => $productModel
                ->where('stock >', 10)
                ->countAllResults(),
            'lowStock'   => $productModel
                ->where('stock <=', 10)
                ->where('stock >', 0)
                ->countAllResults(),
            'outOfStock' => $productModel
                ->where('stock', 0)
                ->countAllResults(),
        ];

        return view('admin/inventory', $data);
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
            ->join('users u', 'u.id = s.user_id')
            ->join('sale_items si', 'si.sale_id = s.id')
            ->join('products p', 'p.id = si.product_id')
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
                        $row['first_name'] . ' ' . $row['last_name']
                    ),
                    'email' => $row['email'],
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
