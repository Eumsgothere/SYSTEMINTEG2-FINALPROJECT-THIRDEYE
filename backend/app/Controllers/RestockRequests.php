<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\RestockRequestModel;

class RestockRequests extends BaseController
{
    public function store()
    {
        $model = new RestockRequestModel();

        $model->insert([
            'product_id'   => $this->request->getPost('product_id'),
            'company_name' => $this->request->getPost('company_name'),
            'name'         => $this->request->getPost('name'),
            'email'        => $this->request->getPost('email'),
            'quantity'     => $this->request->getPost('quantity'),
            'needed_by'    => $this->request->getPost('needed_by'),
            'status'       => 'pending',
        ]);

        session()->setFlashdata(
            'success',
            'Your restock request has been submitted successfully.'
        );

        return redirect()->to(base_url('products'));
    }

    public function form($productId)
    {
        $productModel = new ProductModel();
        $product = $productModel->find($productId);

        if (!$product) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('restock_request', [
            'product' => $product,
        ]);
    }
}
