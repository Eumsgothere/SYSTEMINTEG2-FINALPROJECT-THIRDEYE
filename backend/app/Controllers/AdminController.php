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
}
