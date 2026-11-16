<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();

        $data['products'] = $productModel->findAll();

        return view('admin/products/index', $data);
    }

    public function create()
    {
        return view('admin/products/create');
    }
    public function edit($id)
    {
        $productModel = new ProductModel();

        $data['product'] = $productModel->find($id);

        return view('admin/products/edit', $data);
    }

    public function update($id)
    {
        $productModel = new ProductModel();

        $productModel->update($id, [
            'name' => $this->request->getPost('name'),
            'category' => $this->request->getPost('category'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'stock' => $this->request->getPost('stock'),
            'image' => $this->request->getPost('image'),
        ]);

        return redirect()->to('/admin/products');
    }

    public function delete($id)
    {
        $productModel = new ProductModel();

        $productModel->delete($id);

        return redirect()->to('/admin/products');
    }
    public function store()
    {
        $productModel = new ProductModel();

        $productModel->insert([
            'name' => $this->request->getPost('name'),
            'category' => $this->request->getPost('category'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'stock' => $this->request->getPost('stock'),
            'image' => $this->request->getPost('image'),
        ]);

        return redirect()->to('/admin/products');
    }
}
