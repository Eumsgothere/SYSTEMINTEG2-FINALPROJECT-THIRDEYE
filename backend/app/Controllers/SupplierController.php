<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\SupplierModel;
use App\Models\InventoryModel;

class SupplierController extends BaseController
{
    public function index()
    {
        $supplierModel = new SupplierModel();

        return view('admin/suppliers', [
            'suppliers' => $supplierModel
                ->orderBy('id', 'DESC')
                ->findAll(),
        ]);
    }

    public function create()
    {
        $productModel = new ProductModel();

        return view('admin/suppliers/create', [
            'products' => $productModel->findAll(),
        ]);
    }

    public function store()
    {
        $supplierModel = new SupplierModel();
        $productModel = new ProductModel();
        $inventoryModel = new InventoryModel();
        $db = db_connect();

        $productIds = $this->request->getPost('product_id') ?? [];
        $quantities = $this->request->getPost('product_quantity') ?? [];

        $products = [];
        $suppliedProducts = [];
        $totalQuantity = 0;

        foreach ($productIds as $index => $productId) {
            $quantity = (int) ($quantities[$index] ?? 0);
            $product = $productModel->find((int) $productId);

            if ($product && $quantity > 0) {
                $products[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                ];

                $suppliedProducts[] =
                    $product['name'] . ' (' . $quantity . ')';

                $totalQuantity += $quantity;
            }
        }

        if (empty($products)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Please add at least one product.');
        }

        $db->transStart();

        $supplierId = $supplierModel->insert([
            'supplier_name' => $this->request->getPost('supplier_name'),
            'tin' => $this->request->getPost('tin'),
            'sales_invoice_no' => $this->request->getPost('sales_invoice_no'),
            'products_supplied' => implode(', ', $suppliedProducts),
            'total_quantity' => $totalQuantity,
        ], true);

        foreach ($products as $item) {
            $product = $item['product'];
            $quantity = $item['quantity'];

            $db->table('products')
                ->set('stock', 'stock + ' . $quantity, false)
                ->where('id', (int) $product['id'])
                ->update();

            $inventoryModel->insert([
                'product_id' => $product['id'],
                'quantity' => $quantity,
                'movement_type' => 'IN',
                'remarks' => 'Supplier delivery #' . $supplierId,
            ]);
        }

        $db->transComplete();

        if ($db->transStatus() === false) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Supplier delivery was not saved.');
        }

        return redirect()
            ->to(base_url('admin/suppliers'))
            ->with('success', 'Supplier delivery added and inventory updated.');
    }

    public function delete(int $id)
    {
        $supplierModel = new SupplierModel();
        $inventoryModel = new InventoryModel();
        $productModel = new ProductModel();
        $db = db_connect();

        $supplier = $supplierModel->find($id);

        if (!$supplier) {
            return redirect()->back()
                ->with('error', 'Supplier delivery not found.');
        }

        $movements = $inventoryModel
            ->where('movement_type', 'IN')
            ->like('remarks', 'Supplier delivery #' . $id, 'after')
            ->findAll();

        $db->transStart();

        foreach ($movements as $movement) {
            $product = $productModel->find($movement['product_id']);
            $quantity = (int) $movement['quantity'];

            if (!$product || (int) $product['stock'] < $quantity) {
                $db->transRollback();

                return redirect()->back()
                    ->with(
                        'error',
                        'This delivery cannot be deleted because some of its stock was already sold or used.'
                    );
            }

            $db->table('products')
                ->set('stock', 'stock - ' . $quantity, false)
                ->where('id', (int) $movement['product_id'])
                ->where('stock >=', $quantity)
                ->update();

            $inventoryModel->delete($movement['id']);
        }

        $supplierModel->delete($id);

        $db->transComplete();

        if ($db->transStatus() === false) {
            return redirect()->back()
                ->with('error', 'Supplier delivery could not be deleted.');
        }

        return redirect()
            ->to(base_url('admin/suppliers'))
            ->with('success', 'Supplier delivery deleted successfully.');
    }
}
