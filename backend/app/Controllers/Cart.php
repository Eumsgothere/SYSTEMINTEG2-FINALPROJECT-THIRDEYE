<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Cart extends BaseController
{
    public function index()
    {
        if ($redirect = $this->requireSignIn()) {
            return $redirect;
        }

        $cart = $this->getCart();
        $productModel = new ProductModel();
        $items = [];
        $total = 0;
        $itemCount = 0;

        foreach ($cart as $productId => $quantity) {
            $product = $productModel->find((int) $productId);

            if (!$product || (int) $product['stock'] < 1) {
                unset($cart[$productId]);
                continue;
            }

            $quantity = min((int) $quantity, (int) $product['stock']);
            $cart[$productId] = $quantity;

            $lineTotal = (float) $product['price'] * $quantity;
            $items[] = [
                'product' => $product,
                'quantity' => $quantity,
                'line_total' => $lineTotal,
            ];
            $total += $lineTotal;
            $itemCount += $quantity;
        }

        $this->saveCart($cart);

        return view('cart', [
            'items' => $items,
            'total' => $total,
            'itemCount' => $itemCount,
        ]);
    }

    public function add(int $productId = 0)
    {
        if ($redirect = $this->requireSignIn()) {
            return $redirect;
        }

        $product = (new ProductModel())->find($productId);

        if (!$product) {
            return redirect()->to(base_url('products'))->with('error', 'Product not found.');
        }

        if ((int) $product['stock'] < 1) {
            return redirect()->back()->with('error', 'This product is out of stock.');
        }

        $cart = $this->getCart();
        $currentQuantity = (int) ($cart[$productId] ?? 0);
        $cart[$productId] = min($currentQuantity + 1, (int) $product['stock']);
        $this->saveCart($cart);

        return redirect()->to(base_url('cart'))
            ->with('success', $product['name'] . ' was added to your cart.');
    }

    public function update(int $productId = 0)
    {
        if ($redirect = $this->requireSignIn()) {
            return $redirect;
        }

        $product = (new ProductModel())->find($productId);
        $cart = $this->getCart();

        if (!$product || (int) $product['stock'] < 1) {
            unset($cart[$productId]);
            $this->saveCart($cart);
            return redirect()->to(base_url('cart'));
        }

        $currentQuantity = (int) ($cart[$productId] ?? 1);
        $change = (int) $this->request->getPost('change');
        $quantity = max(1, min($currentQuantity + $change, (int) $product['stock']));

        $cart[$productId] = $quantity;
        $this->saveCart($cart);

        return redirect()->to(base_url('cart'));
    }

    public function remove(int $productId = 0)
    {
        if ($redirect = $this->requireSignIn()) {
            return $redirect;
        }

        $cart = $this->getCart();
        unset($cart[$productId]);
        $this->saveCart($cart);

        return redirect()->to(base_url('cart'));
    }

    private function getCart(): array
    {
        $cart = session()->get('cart');

        return is_array($cart) ? $cart : [];
    }

    private function saveCart(array $cart): void
    {
        session()->set('cart', $cart);
    }

    private function requireSignIn()
    {
        if (session()->get('logged_in')) {
            return null;
        }

        return redirect()->to(base_url('login'))
            ->with('error', 'Please sign in to use your cart.');
    }
}
