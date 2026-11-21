<?php

namespace App\Controllers;

class Orders extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'))
                ->with('error', 'Please sign in to view your orders.');
        }

        $db = db_connect();

        $rows = $db->table('sales s')
            ->select([
                's.id AS order_id',
                's.total_amount',
                's.status',
                's.created_at',
                'si.quantity',
                'si.price',
                'si.subtotal',
                'p.name AS product_name',
            ])
            ->join('sale_items si', 'si.sale_id = s.id')
            ->join('products p', 'p.id = si.product_id')
            ->where('s.user_id', (int) session()->get('user_id'))
            ->orderBy('s.created_at', 'DESC')
            ->get()
            ->getResultArray();

        $orders = [];

        foreach ($rows as $row) {
            $orderId = $row['order_id'];

            if (!isset($orders[$orderId])) {
                $orders[$orderId] = [
                    'id' => $orderId,
                    'total_amount' => $row['total_amount'],
                    'status' => $row['status'],
                    'created_at' => $row['created_at'],
                    'items' => [],
                ];
            }

            $orders[$orderId]['items'][] = [
                'product_name' => $row['product_name'],
                'quantity' => $row['quantity'],
                'price' => $row['price'],
                'subtotal' => $row['subtotal'],
            ];
        }

        return view('orders', [
            'orders' => array_values($orders),
        ]);
    }
}
