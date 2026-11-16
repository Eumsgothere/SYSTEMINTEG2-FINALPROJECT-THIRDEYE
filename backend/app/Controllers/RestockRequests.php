<?php

namespace App\Controllers;

use App\Models\RestockRequestModel;

class RestockRequests extends BaseController
{
    public function store()
    {
        $model = new RestockRequestModel();

        $model->insert([
            'product_id' => $this->request->getPost('product_id'),
            'name'       => $this->request->getPost('name'),
            'email'      => $this->request->getPost('email'),
            'status'     => 'pending',
        ]);

        return redirect()->back()->with(
            'success',
            'Your restock request has been submitted.'
        );
    }
}
