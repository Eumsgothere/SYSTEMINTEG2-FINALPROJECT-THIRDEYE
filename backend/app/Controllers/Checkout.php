<?php

namespace App\Controllers;

use App\Models\InventoryModel;
use App\Models\ProductModel;
use App\Models\SaleItemModel;
use App\Models\SaleModel;

class Checkout extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'))
                ->with('error', 'Please sign in to continue.');
        }

        $cart = $this->getCartItems();

        return view('checkout', [
            'items' => $cart['items'],
            'total' => $cart['total'],
            'itemCount' => $cart['itemCount'],
        ]);
    }

    public function complete()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'))
                ->with('error', 'Please sign in to continue.');
        }

        $cart = $this->getCartItems();

        if (empty($cart['items'])) {
            return redirect()->to(base_url('cart'))
                ->with('error', 'Your cart is empty.');
        }

        $db = db_connect();

        $saleModel = new SaleModel();
        $saleItemModel = new SaleItemModel();
        $inventoryModel = new InventoryModel();

        $db->transStart();

        $saleId = $saleModel->insert([
            'user_id'      => (int) session()->get('user_id'),
            'total_amount' => $cart['total'],
            'status'       => 'paid',
        ], true);

        foreach ($cart['items'] as $item) {
            $product = $item['product'];
            $quantity = (int) $item['quantity'];

            $updated = $db->table('products')
                ->set('stock', 'stock - ' . $quantity, false)
                ->where('id', (int) $product['id'])
                ->where('stock >=', $quantity)
                ->update();

            if (!$updated || $db->affectedRows() !== 1) {
                $db->transRollback();

                return redirect()->to(base_url('cart'))
                    ->with('error', $product['name'] . ' does not have enough stock.');
            }

            $saleItemModel->insert([
                'sale_id'    => $saleId,
                'product_id' => $product['id'],
                'quantity'   => $quantity,
                'price'      => $product['price'],
                'subtotal'   => $item['line_total'],
            ]);

            $inventoryModel->insert([
                'product_id'    => $product['id'],
                'quantity'      => $quantity,
                'movement_type' => 'OUT',
                'remarks'       => 'Sale #' . $saleId,
            ]);
        }

        $db->transComplete();

        if ($db->transStatus() === false) {
            return redirect()->to(base_url('checkout'))
                ->with('error', 'Order failed. Stock was not changed.');
        }

        session()->remove('cart');

        return redirect()->to(base_url('checkout'))
            ->with('success', 'Order #' . $saleId . ' placed successfully.');
    }

    private function getCartItems(): array
    {
        $cart = session()->get('cart');
        $cart = is_array($cart) ? $cart : [];

        $productModel = new ProductModel();

        $items = [];
        $total = 0;
        $itemCount = 0;

        foreach ($cart as $productId => $quantity) {
            $product = $productModel->find((int) $productId);
            $quantity = (int) $quantity;

            if (!$product || $quantity < 1 || $product['stock'] < 1) {
                continue;
            }

            $quantity = min($quantity, (int) $product['stock']);
            $lineTotal = (float) $product['price'] * $quantity;

            $items[] = [
                'product'    => $product,
                'quantity'   => $quantity,
                'line_total' => $lineTotal,
            ];

            $total += $lineTotal;
            $itemCount += $quantity;
        }

        return [
            'items'     => $items,
            'total'     => $total,
            'itemCount' => $itemCount,
        ];
    }
}
