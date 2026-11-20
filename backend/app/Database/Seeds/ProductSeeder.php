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
            ['name' => 'JINRO', 'category' => 'Soju', 'description' => '', 'price' => 265, 'stock' => 24, 'image' => 'images/products/Jinro.jpg'],
            ['name' => 'CHAMISOL', 'category' => 'Soju', 'description' => '', 'price' => 110, 'stock' => 40, 'image' => 'images/products/Chamisol.jpg'],
            ['name' => 'CHUMCHURUM', 'category' => 'Soju', 'description' => '', 'price' => 110, 'stock' => 40, 'image' => 'images/products/Chumchurum.jpg'],
            ['name' => 'IICHIKO', 'category' => 'Soju', 'description' => '', 'price' => 1050, 'stock' => 0, 'image' => 'images/products/Iichiko.jpg'],
            ['name' => 'KUROKIRISHIMA', 'category' => 'Soju', 'description' => '', 'price' => 900, 'stock' => 0, 'image' => 'images/products/Kurokirishima.jpg'],

            // TEQUILA
            ['name' => 'CUERVO REG', 'category' => 'Tequila', 'description' => '', 'price' => 880, 'stock' => 24, 'image' => 'images/products/CuervoReg.jpg'],
            ['name' => 'CUERVO LITRO', 'category' => 'Tequila', 'description' => '', 'price' => 1200, 'stock' => 24, 'image' => 'images/products/CuervoLitro.jpg'],
            ['name' => 'TEQUILA ROSE', 'category' => 'Tequila', 'description' => '', 'price' => 1150, 'stock' => 0, 'image' => 'images/products/TequilaRose.jpg'],
            ['name' => 'MOJITOS', 'category' => 'Tequila', 'description' => '', 'price' => 320, 'stock' => 24, 'image' => 'images/products/Mojitos.jpg'],
            ['name' => 'MOJITOS WHITE', 'category' => 'Tequila', 'description' => '', 'price' => 290, 'stock' => 0, 'image' => 'images/products/MojitosWhite.jpg'],
            ['name' => 'MARGARITA', 'category' => 'Tequila', 'description' => '', 'price' => 185, 'stock' => 0, 'image' => 'images/products/Margarita.jpg'],
            ['name' => 'TRIPLE SEC', 'category' => 'Tequila', 'description' => '', 'price' => 320, 'stock' => 0, 'image' => 'images/products/TripleSec.jpg'],

            // RED WINE
            ['name' => 'Carlo Rossi CR', 'category' => 'Red Wine', 'description' => '', 'price' => 360, 'stock' => 0, 'image' => 'images/products/CRCR.jpg'],
            ['name' => 'Carlo Rossi RM', 'category' => 'Red Wine', 'description' => '', 'price' => 360, 'stock' => 0, 'image' => 'images/products/CRRM.jpg'],
            ['name' => 'CHARLES & JAMES', 'category' => 'Red Wine', 'description' => '', 'price' => 330, 'stock' => 0, 'image' => 'images/products/C&J.jpg'],
            ['name' => 'NOVELLINO RUSSO', 'category' => 'Red Wine', 'description' => '', 'price' => 355, 'stock' => 12, 'image' => 'images/products/NovellinoRusso.jpg'],
            ['name' => 'NOVELLINO SPARKLING', 'category' => 'Red Wine', 'description' => '', 'price' => 355, 'stock' => 12, 'image' => 'images/products/NovellinoSparkling.jpg'],
            ['name' => 'NOVELLINO STRAWBERRY', 'category' => 'Red Wine', 'description' => '', 'price' => 355, 'stock' => 12, 'image' => 'images/products/NovellinoStrawberry.jpg'],
            ['name' => 'NOVELLINO WILDCLKBRY', 'category' => 'Red Wine', 'description' => '', 'price' => 355, 'stock' => 12, 'image' => 'images/products/NovellinoBerry.jpg'],
            ['name' => 'PRIMERA', 'category' => 'Red Wine', 'description' => '', 'price' => 173, 'stock' => 24, 'image' => 'images/products/Primera.jpg'],

            // WHISKEY
            ['name' => 'CHIVAS', 'category' => 'Whiskey', 'description' => '', 'price' => 880, 'stock' => 0, 'image' => 'images/products/Chivas.jpg'],
            ['name' => 'JW Black Label REG', 'category' => 'Whiskey', 'description' => '', 'price' => 0, 'stock' => 0, 'image' => 'images/products/Blacklabel.jpg'],
            ['name' => 'JW Black Label 1L', 'category' => 'Whiskey', 'description' => '', 'price' => 0, 'stock' => 0, 'image' => 'images/products/Blacklabel.jpg'],
            ['name' => 'JD REG', 'category' => 'Whiskey', 'description' => '', 'price' => 1190, 'stock' => 0, 'image' => 'images/products/JD.jpg'],
            ['name' => 'JD 1L', 'category' => 'Whiskey', 'description' => '', 'price' => 1588, 'stock' => 0, 'image' => 'images/products/JD.jpg'],
            ['name' => 'RED LABEL', 'category' => 'Whiskey', 'description' => '', 'price' => 0, 'stock' => 0, 'image' => 'images/products/Redlabel.jpg'],
            ['name' => 'SUNTORRY Whisky', 'category' => 'Whiskey', 'description' => '', 'price' => 1550, 'stock' => 5, 'image' => 'images/products/Suntorry.jpg'],
            ['name' => 'WHITE CASTLE 69', 'category' => 'Whiskey', 'description' => '', 'price' => 205, 'stock' => 24, 'image' => 'images/products/WhiteCastle69.jpg'],
            ['name' => 'WHITE CASTLE LIGHTS', 'category' => 'Whiskey', 'description' => '', 'price' => 185, 'stock' => 24, 'image' => 'images/products/WhiteCastleLight.jpg'],

            // BEVERAGES
            ['name' => '1.5 LITRO COKE', 'category' => 'Beverages', 'description' => '', 'price' => 75, 'stock' => 0, 'image' => 'images/products/Coke.jpg'],
            ['name' => '1.5 LITRO COKE 0', 'category' => 'Beverages', 'description' => '', 'price' => 75, 'stock' => 0, 'image' => 'images/products/Coke0.jpg'],
            ['name' => '1.5 LITRO SPRITE', 'category' => 'Beverages', 'description' => '', 'price' => 75, 'stock' => 0, 'image' => 'images/products/Sprite.jpg'],
            ['name' => '5 GAL', 'category' => 'Beverages', 'description' => '', 'price' => 40, 'stock' => 50, 'image' => 'images/products/Gal.jpg'],
            ['name' => 'AQUA 350ML', 'category' => 'Beverages', 'description' => '', 'price' => 7.5, 'stock' => 120, 'image' => 'images/products/Aquasweet.jpg'],
            ['name' => 'AQUA 500ML ', 'category' => 'Beverages', 'description' => '', 'price' => 9, 'stock' => 120, 'image' => 'images/products/Aquasweet.jpg'],
            ['name' => 'COKE', 'category' => 'Beverages', 'description' => '', 'price' => 37, 'stock' => 120, 'image' => 'images/products/Coke.jpg'],
            ['name' => 'COKE MISMO', 'category' => 'Beverages', 'description' => '', 'price' => 37, 'stock' => 0, 'image' => 'images/products/Coke.jpg'],
            ['name' => 'COKE 0', 'category' => 'Beverages', 'description' => '', 'price' => 37, 'stock' => 120, 'image' => 'images/products/Coke0.jpg'],
            ['name' => 'DM FOURSEASON', 'category' => 'Beverages', 'description' => '', 'price' => 37, 'stock' => 48, 'image' => 'images/products/Fourseasons.jpg'],
            ['name' => 'DM MANGO', 'category' => 'Beverages', 'description' => '', 'price' => 44, 'stock' => 120, 'image' => 'images/products/Mango.jpg'],
            ['name' => 'DM ORANGE', 'category' => 'Beverages', 'description' => '', 'price' => 35, 'stock' => 0, 'image' => 'images/products/Orange.jpg'],
            ['name' => 'DM PINEAPPLE', 'category' => 'Beverages', 'description' => '', 'price' => 35, 'stock' => 120, 'image' => 'images/products/Pineapple.jpg'],
            ['name' => 'INFERNO', 'category' => 'Beverages', 'description' => '', 'price' => 520, 'stock' => 0, 'image' => 'images/products/Inferno.jpg'],
            ['name' => 'MM ORANGE', 'category' => 'Beverages', 'description' => '', 'price' => 32, 'stock' => 120, 'image' => 'images/products/Orange.jpg'],
            ['name' => 'NATURE SPRING 500', 'category' => 'Beverages', 'description' => '', 'price' => 10, 'stock' => 120, 'image' => 'images/products/NatureSpring.jpg'],
            ['name' => 'NATURE SPRING 350', 'category' => 'Beverages', 'description' => '', 'price' => 8.5, 'stock' => 120, 'image' => 'images/products/NatureSpring.jpg'],
            ['name' => 'NEW GAL ROUND', 'category' => 'Beverages', 'description' => '', 'price' => 200, 'stock' => 0, 'image' => 'images/products/NewGalRound.jpg'],
            ['name' => 'NEW GAL SLIM', 'category' => 'Beverages', 'description' => '', 'price' => 200, 'stock' => 0, 'image' => 'images/products/NewGalSlim.jpg'],
            ['name' => 'OOLONG TEA', 'category' => 'Beverages', 'description' => '', 'price' => 70, 'stock' => 1500, 'image' => 'images/products/OolongTea.jpg'],
            ['name' => 'ROBIFF O TEA', 'category' => 'Beverages', 'description' => '', 'price' => 70, 'stock' => 0, 'image' => 'images/products/Robiff.jpg'],
            ['name' => 'ROYAL', 'category' => 'Beverages', 'description' => '', 'price' => 37, 'stock' => 120, 'image' => 'images/products/Royal.jpg'],
            ['name' => 'SODA WATER', 'category' => 'Beverages', 'description' => '', 'price' => 43, 'stock' => 120, 'image' => 'images/products/SodaWater.jpg'],
            ['name' => 'SPRITE', 'category' => 'Beverages', 'description' => '', 'price' => 37, 'stock' => 120, 'image' => 'images/products/Sprite.jpg'],
            ['name' => 'SPRITE MISMO', 'category' => 'Beverages', 'description' => '', 'price' => 27, 'stock' => 0, 'image' => 'images/products/Sprite.jpg'],
            ['name' => 'SUMMIT 350ml', 'category' => 'Beverages', 'description' => '', 'price' => 27, 'stock' => 120, 'image' => 'images/products/Summit.jpg'],
            ['name' => 'SUMMIT 500ml', 'category' => 'Beverages', 'description' => '', 'price' => 13, 'stock' => 120, 'image' => 'images/products/Summit.jpg'],
            ['name' => 'TONIC WATER', 'category' => 'Beverages', 'description' => '', 'price' => 43, 'stock' => 120, 'image' => 'images/products/TonicWater.jpg'],

            // OTHERS
            ['name' => 'ALFONSO', 'category' => 'Whiskey', 'description' => '', 'price' => 275, 'stock' => 24, 'image' => 'images/products/Alfonso.jpg'],
            ['name' => 'ALFONSO LITRO', 'category' => 'Whiskey', 'description' => '', 'price' => 330, 'stock' => 0, 'image' => 'images/products/Alfonso.jpg'],
            ['name' => 'BAILEYS', 'category' => 'Whiskey', 'description' => '', 'price' => 935, 'stock' => 0, 'image' => 'images/products/Bail.jpg'],
            ['name' => 'EMPERADOR LIGHTS', 'category' => 'Whiskey', 'description' => '', 'price' => 165, 'stock' => 0, 'image' => 'images/products/Empy.jpg'],
            ['name' => 'GRENADINE', 'category' => 'Beverages', 'description' => '', 'price' => 270, 'stock' => 0, 'image' => 'images/products/Grenadine.jpg'],
            ['name' => 'KAHLUA', 'category' => 'Whiskey', 'description' => '', 'price' => 890, 'stock' => 0, 'image' => 'images/products/Kahlua.jpg'],
            ['name' => 'LIME JUICE', 'category' => 'Beverages', 'description' => '', 'price' => 140, 'stock' => 0, 'image' => 'images/products/Lime.jpg'],
            ['name' => 'NAPOLEON', 'category' => 'Whiskey', 'description' => '', 'price' => 165, 'stock' => 24, 'image' => 'images/products/Napol.jpg'],
            ['name' => 'NAPOLEON IICHIKO', 'category' => 'Soju', 'description' => '', 'price' => 1050, 'stock' => 0, 'image' => 'images/products/Napoleon.jpg'],
            ['name' => 'TOSKA', 'category' => 'Whiskey', 'description' => '', 'price' => 250, 'stock' => 0, 'image' => 'images/products/Toska.jpg'],
        ];

        $this->db->table('products')->insertBatch($products);
    }
}
