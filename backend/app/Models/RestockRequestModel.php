<?php

namespace App\Models;

use CodeIgniter\Model;

class RestockRequestModel extends Model
{
    protected $table = 'restock_requests';

    protected $allowedFields = [
        'product_id',
        'name',
        'email',
        'status',
    ];

    protected $useTimestamps = true;
}
