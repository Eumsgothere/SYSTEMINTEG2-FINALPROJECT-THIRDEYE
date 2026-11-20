<?php

namespace App\Controllers;

use App\Models\ProductModel;

class HomeController extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();

        $data['products'] = $productModel
            ->orderBy('id', 'DESC')
            ->findAll(8); // show 8 products

        return view('home', $data);
    }
}
