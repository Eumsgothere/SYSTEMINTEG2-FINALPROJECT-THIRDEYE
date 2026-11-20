<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SupplierSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['supplier_name' => 'CLIGAN'],
            ['supplier_name' => 'METROWINE'],
            ['supplier_name' => 'WINES SPECIALIST & BEYOND'],
            ['supplier_name' => 'GENECELLAR'],
            ['supplier_name' => 'CASH AND CARRY'],
            ['supplier_name' => 'SOUTHEAST ASIA RETAIL INC'],
            ['supplier_name' => 'MAGNATE'],
            ['supplier_name' => 'WIN2 MART'],
            ['supplier_name' => 'TBL'],
            ['supplier_name' => '4K2B CONSUMER GOODS'],
            ['supplier_name' => 'MACAPAGAL'],
            ['supplier_name' => 'CONVOY MKTG CORP'],
            ['supplier_name' => 'HARRYS LIQUORMART'],
            ['supplier_name' => 'PWS'],
            ['supplier_name' => 'PUREGOLD'],
            ['supplier_name' => 'POPMART'],
            ['supplier_name' => 'HARRISSON'],
            ['supplier_name' => 'SUPER 8'],
            ['supplier_name' => 'MEIMEI MART'],
            ['supplier_name' => 'DRINK ALL'],
        ];

        $this->db->table('suppliers')->insertBatch($data);
    }
}
