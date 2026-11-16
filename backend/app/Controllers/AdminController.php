<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProductModel;
use App\Models\InventoryModel;
use App\Models\SaleModel;

class AdminController extends BaseController
{
    public function dashboard()
    {
        $users = new UserModel();
        $products = new ProductModel();
        $inventory = new InventoryModel();
        $sales = new SaleModel();

        $data = [
            'users' => $users->countAll(),
            'products' => $products->countAll(),
            'inventory' => $inventory->countAll(),
            'sales' => $sales->countAll(),
        ];

        return view('admin/dashboard', $data);
    }
}
