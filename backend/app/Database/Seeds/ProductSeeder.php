<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $placeholder = 'https://via.placeholder.com/400x300';

        $products = [

            // SOJU
            ['name' => 'JINRO', 'category' => 'Soju', 'description' => '', 'price' => 265, 'stock' => 24, 'image' => $placeholder],
            ['name' => 'CHAMISOL', 'category' => 'Soju', 'description' => '', 'price' => 110, 'stock' => 40, 'image' => $placeholder],
            ['name' => 'CHUMCHURUM', 'category' => 'Soju', 'description' => '', 'price' => 110, 'stock' => 40, 'image' => $placeholder],
            ['name' => 'IICHIKO', 'category' => 'Soju', 'description' => '', 'price' => 1050, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'KUROKIRISHIMA', 'category' => 'Soju', 'description' => '', 'price' => 900, 'stock' => 0, 'image' => $placeholder],

            // TEQUILA
            ['name' => 'CUERVO REG', 'category' => 'Tequila', 'description' => '', 'price' => 880, 'stock' => 24, 'image' => $placeholder],
            ['name' => 'CUERVO LIT', 'category' => 'Tequila', 'description' => '', 'price' => 1200, 'stock' => 24, 'image' => $placeholder],
            ['name' => 'TEQ ROSE', 'category' => 'Tequila', 'description' => '', 'price' => 1150, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'MOJITOS', 'category' => 'Tequila', 'description' => '', 'price' => 320, 'stock' => 24, 'image' => $placeholder],
            ['name' => 'MOJITOS WHITE', 'category' => 'Tequila', 'description' => '', 'price' => 290, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'MARGARITA', 'category' => 'Tequila', 'description' => '', 'price' => 185, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'TRIPLE SEC', 'category' => 'Tequila', 'description' => '', 'price' => 320, 'stock' => 0, 'image' => $placeholder],

            // RED WINE
            ['name' => 'Carlo Rossi CR', 'category' => 'Red Wine', 'description' => '', 'price' => 360, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'Carlo Rossi RM', 'category' => 'Red Wine', 'description' => '', 'price' => 360, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'CHARLES & JAMES', 'category' => 'Red Wine', 'description' => '', 'price' => 330, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'NOV RUSSO', 'category' => 'Red Wine', 'description' => '', 'price' => 355, 'stock' => 12, 'image' => $placeholder],
            ['name' => 'NOV SPARKLING', 'category' => 'Red Wine', 'description' => '', 'price' => 355, 'stock' => 12, 'image' => $placeholder],
            ['name' => 'NOV STRAWBERRY', 'category' => 'Red Wine', 'description' => '', 'price' => 355, 'stock' => 12, 'image' => $placeholder],
            ['name' => 'NOV WILDCLKBRY', 'category' => 'Red Wine', 'description' => '', 'price' => 355, 'stock' => 12, 'image' => $placeholder],
            ['name' => 'PRIMERA', 'category' => 'Red Wine', 'description' => '', 'price' => 173, 'stock' => 24, 'image' => $placeholder],

            // WHISKEY
            ['name' => 'CHIVAS', 'category' => 'Whiskey', 'description' => '', 'price' => 880, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'JW Black Label REG', 'category' => 'Whiskey', 'description' => '', 'price' => 0, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'JW Black Label 1L', 'category' => 'Whiskey', 'description' => '', 'price' => 0, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'JD REG', 'category' => 'Whiskey', 'description' => '', 'price' => 1190, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'JD 1L', 'category' => 'Whiskey', 'description' => '', 'price' => 1588, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'RED LABEL', 'category' => 'Whiskey', 'description' => '', 'price' => 0, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'SUNTORRY Whisky', 'category' => 'Whiskey', 'description' => '', 'price' => 1550, 'stock' => 5, 'image' => $placeholder],
            ['name' => 'WHITE CASTLE 69', 'category' => 'Whiskey', 'description' => '', 'price' => 205, 'stock' => 24, 'image' => $placeholder],
            ['name' => 'WHITE CASTLE LIG', 'category' => 'Whiskey', 'description' => '', 'price' => 185, 'stock' => 24, 'image' => $placeholder],

            // BEVERAGES
            ['name' => '1.5 LIT COKE', 'category' => 'Beverages', 'description' => '', 'price' => 75, 'stock' => 0, 'image' => $placeholder],
            ['name' => '1.5 LIT COKE 0', 'category' => 'Beverages', 'description' => '', 'price' => 75, 'stock' => 0, 'image' => $placeholder],
            ['name' => '1.5 LIT SPRITE', 'category' => 'Beverages', 'description' => '', 'price' => 75, 'stock' => 0, 'image' => $placeholder],
            ['name' => '5 GAL', 'category' => 'Beverages', 'description' => '', 'price' => 40, 'stock' => 50, 'image' => $placeholder],
            ['name' => 'AQUA 350ML', 'category' => 'Beverages', 'description' => '', 'price' => 7.5, 'stock' => 120, 'image' => $placeholder],
            ['name' => 'AQUA 500ML ', 'category' => 'Beverages', 'description' => '', 'price' => 9, 'stock' => 120, 'image' => $placeholder],
            ['name' => 'COKE', 'category' => 'Beverages', 'description' => '', 'price' => 37, 'stock' => 120, 'image' => $placeholder],
            ['name' => 'COKE MISMO', 'category' => 'Beverages', 'description' => '', 'price' => 37, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'COKE 0', 'category' => 'Beverages', 'description' => '', 'price' => 37, 'stock' => 120, 'image' => $placeholder],
            ['name' => 'DM FOURSEASON', 'category' => 'Beverages', 'description' => '', 'price' => 37, 'stock' => 48, 'image' => $placeholder],
            ['name' => 'DM MANGO', 'category' => 'Beverages', 'description' => '', 'price' => 44, 'stock' => 120, 'image' => $placeholder],
            ['name' => 'DM ORANGE', 'category' => 'Beverages', 'description' => '', 'price' => 35, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'DM PINEAPPLE', 'category' => 'Beverages', 'description' => '', 'price' => 35, 'stock' => 120, 'image' => $placeholder],
            ['name' => 'INFERNO', 'category' => 'Beverages', 'description' => '', 'price' => 520, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'MM ORANGE', 'category' => 'Beverages', 'description' => '', 'price' => 32, 'stock' => 120, 'image' => $placeholder],
            ['name' => 'NATURE SPRING 500', 'category' => 'Beverages', 'description' => '', 'price' => 10, 'stock' => 120, 'image' => $placeholder],
            ['name' => 'NATURE SPRING 350', 'category' => 'Beverages', 'description' => '', 'price' => 8.5, 'stock' => 120, 'image' => $placeholder],
            ['name' => 'NEW GAL ROUND', 'category' => 'Beverages', 'description' => '', 'price' => 200, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'NEW GAL SLIM', 'category' => 'Beverages', 'description' => '', 'price' => 200, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'OOLONG TEA', 'category' => 'Beverages', 'description' => '', 'price' => 70, 'stock' => 1500, 'image' => $placeholder],
            ['name' => 'ROBIFF O TEA', 'category' => 'Beverages', 'description' => '', 'price' => 70, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'ROYAL', 'category' => 'Beverages', 'description' => '', 'price' => 37, 'stock' => 120, 'image' => $placeholder],
            ['name' => 'SODA WATER', 'category' => 'Beverages', 'description' => '', 'price' => 43, 'stock' => 120, 'image' => $placeholder],
            ['name' => 'SPRITE', 'category' => 'Beverages', 'description' => '', 'price' => 37, 'stock' => 120, 'image' => $placeholder],
            ['name' => 'SPRITE MISMO', 'category' => 'Beverages', 'description' => '', 'price' => 27, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'SUMMIT 350ml', 'category' => 'Beverages', 'description' => '', 'price' => 27, 'stock' => 120, 'image' => $placeholder],
            ['name' => 'SUMMIT 500ml', 'category' => 'Beverages', 'description' => '', 'price' => 13, 'stock' => 120, 'image' => $placeholder],
            ['name' => 'TONIC WATER', 'category' => 'Beverages', 'description' => '', 'price' => 43, 'stock' => 120, 'image' => $placeholder],

            // OTHERS
            ['name' => 'ALFONSO', 'category' => 'Whiskey', 'description' => '', 'price' => 275, 'stock' => 24, 'image' => $placeholder],
            ['name' => 'ALFONSO LIT', 'category' => 'Whiskey', 'description' => '', 'price' => 330, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'BAILEYS', 'category' => 'Whiskey', 'description' => '', 'price' => 935, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'EMPERADOR LIGHTS', 'category' => 'Whiskey', 'description' => '', 'price' => 165, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'GRENADINE', 'category' => 'Beverages', 'description' => '', 'price' => 270, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'KAHLUA', 'category' => 'Whiskey', 'description' => '', 'price' => 890, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'LIME JUICE', 'category' => 'Beverages', 'description' => '', 'price' => 140, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'NAPOLEON', 'category' => 'Whiskey', 'description' => '', 'price' => 165, 'stock' => 24, 'image' => $placeholder],
            ['name' => 'NAPOLEON IICHIKO', 'category' => 'Soju', 'description' => '', 'price' => 1050, 'stock' => 0, 'image' => $placeholder],
            ['name' => 'TOSKA', 'category' => 'Whiskey', 'description' => '', 'price' => 250, 'stock' => 0, 'image' => $placeholder],
        ];

        $this->db->table('products')->insertBatch($products);
    }
}
