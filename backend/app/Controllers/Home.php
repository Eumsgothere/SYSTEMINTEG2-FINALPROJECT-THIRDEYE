<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Home extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();

        $data['products'] = $productModel
            ->where('stock >', 0)
            ->orderBy('id', 'DESC')
            ->findAll(8);

        return view('home', $data);
    }
}
