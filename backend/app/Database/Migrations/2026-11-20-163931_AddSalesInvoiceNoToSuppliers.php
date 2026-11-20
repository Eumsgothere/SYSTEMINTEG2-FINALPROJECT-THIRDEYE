<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSupplierDetails extends Migration
{
    public function up()
    {
        $this->forge->addColumn('suppliers', [
            'sales_invoice_no' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],
            'products_supplied' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'total_quantity' => [
                'type'     => 'INT',
                'unsigned' => true,
                'default'  => 0,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('suppliers', [
            'sales_invoice_no',
            'products_supplied',
            'total_quantity',
        ]);
    }
}
