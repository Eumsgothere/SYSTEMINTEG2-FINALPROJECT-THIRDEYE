<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Products extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();

        return view('products', [
            'products' => $productModel->findAll(),
        ]);
    }
}
