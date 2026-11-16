<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Products extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();

        $products = $productModel->findAll();

        return view('products', [
            'products' => $products,
        ]);
    }
}
