<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Checkout extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'))
                ->with('error', 'Please sign in to continue to checkout.');
        }

        $cart = session()->get('cart');
        $cart = is_array($cart) ? $cart : [];
        $productModel = new ProductModel();
        $items = [];
        $total = 0;
        $itemCount = 0;

        foreach ($cart as $productId => $quantity) {
            $product = $productModel->find((int) $productId);
            $quantity = (int) $quantity;

            if (!$product || $quantity < 1 || (int) $product['stock'] < 1) {
                continue;
            }

            $quantity = min($quantity, (int) $product['stock']);
            $lineTotal = (float) $product['price'] * $quantity;

            $items[] = [
                'product' => $product,
                'quantity' => $quantity,
                'line_total' => $lineTotal,
            ];
            $total += $lineTotal;
            $itemCount += $quantity;
        }

        session()->remove('cart');

        return view('checkout', [
            'items' => $items,
            'total' => $total,
            'itemCount' => $itemCount,
        ]);
    }
}
