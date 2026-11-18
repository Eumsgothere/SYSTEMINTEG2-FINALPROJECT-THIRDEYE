<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
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
    public function viewprod(int $id = 0)
    {
        $product = (new ProductModel())->find($id);

        if (!$product) {
            throw PageNotFoundException::forPageNotFound('Product not found.');
        }

        return view('productview', [
            'product' => $product,
        ]);
    }
}
