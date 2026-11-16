<?php

namespace App\Models;

use CodeIgniter\Model;

class InventoryModel extends Model
{
    protected $table = 'inventory';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'product_id',
        'quantity',
        'movement_type',
        'remarks',
    ];

    protected $useTimestamps = false;

    protected $returnType = 'array';
}
