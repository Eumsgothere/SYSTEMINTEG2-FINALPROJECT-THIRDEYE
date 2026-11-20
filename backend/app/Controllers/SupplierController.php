<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\SupplierModel;

class SupplierController extends BaseController
{
    public function index()
    {
        $supplierModel = new \App\Models\SupplierModel();

        return view('admin/suppliers', [
            'suppliers' => $supplierModel->findAll(),
        ]);
    }

    public function create()
    {
        $productModel = new \App\Models\ProductModel();

        return view('admin/suppliers/create', [
            'products' => $productModel->findAll(),
        ]);
    }
    public function store()
    {
        $supplierModel = new SupplierModel();
        $productModel = new ProductModel();

        $productIds = $this->request->getPost('product_id') ?? [];
        $quantities = $this->request->getPost('product_quantity') ?? [];

        $suppliedProducts = [];
        $totalQuantity = 0;

        foreach ($productIds as $index => $productId) {
            $quantity = (int) ($quantities[$index] ?? 0);
            $product = $productModel->find((int) $productId);

            if ($product && $quantity > 0) {
                $suppliedProducts[] =
                    $product['name'] . ' (' . $quantity . ')';

                $totalQuantity += $quantity;
            }
        }

        $supplierModel->insert([
            'supplier_name'    => $this->request->getPost('supplier_name'),
            'tin'              => $this->request->getPost('tin'),
            'sales_invoice_no' => $this->request->getPost('sales_invoice_no'),
            'products_supplied' => implode(', ', $suppliedProducts),
            'total_quantity'   => $totalQuantity,
        ]);

        return redirect()
            ->to(base_url('admin/suppliers'))
            ->with('success', 'Supplier added successfully.');
    }
}
