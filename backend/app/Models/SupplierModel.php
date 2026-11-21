<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $table = 'suppliers';
    protected $primaryKey = 'id';
    protected $returnType = 'array';

    protected $useAutoIncrement = true;
    protected $protectFields = true;

    protected $allowedFields = [
        'supplier_name',
        'tin',
        'sales_invoice_no',
        'products_supplied',
        'total_quantity',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    protected $validationRules = [
        'supplier_name'    => 'required|min_length[2]',
        'tin'              => 'permit_empty|max_length[50]',
        'sales_invoice_no' => 'permit_empty|max_length[100]',
        'products_supplied' => 'permit_empty',
        'total_quantity'   => 'permit_empty|integer|greater_than_equal_to[0]',
    ];
}
