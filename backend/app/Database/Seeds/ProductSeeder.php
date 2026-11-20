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
            ['name' => 'JINRO', 'category' => 'Soju', 'description' => '', 'price' => 265, 'stock' => 24, 'image' => 'https://foodpanda.dhmedia.io/image/darsktores-ph/food/Correct%20Image.png?height=480'],
            ['name' => 'CHAMISOL', 'category' => 'Soju', 'description' => '', 'price' => 110, 'stock' => 40, 'image' => 'https://ralphs.com.ph/products/jinro-chamisul-original-soju-360ml'],
            ['name' => 'CHUMCHURUM', 'category' => 'Soju', 'description' => '', 'price' => 110, 'stock' => 40, 'image' => 'https://company.lottechilsung.co.kr/eng/brand/soju/contentsid/785/index.do'],
            ['name' => 'IICHIKO', 'category' => 'Soju', 'description' => '', 'price' => 1050, 'stock' => 0, 'image' => 'https://www.wine-searcher.com/images/labels/36/61/11053661.jpg'],
            ['name' => 'KUROKIRISHIMA', 'category' => 'Soju', 'description' => '', 'price' => 900, 'stock' => 0, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTTqbbvA6akLIMOt--ZwKy0kmzu_C6q4BaozbzE--nZUwLRz1ONGkiYZP8&s=10'],

            // TEQUILA
            ['name' => 'CUERVO REG', 'category' => 'Tequila', 'description' => '', 'price' => 880, 'stock' => 24, 'image' => 'https://www.singlemalt.ph/cdn/shop/products/Untitleddesign-2021-04-16T145616.111.png?v=1618556186'],
            ['name' => 'CUERVO LITRO', 'category' => 'Tequila', 'description' => '', 'price' => 1200, 'stock' => 24, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuo2fCvuhWMI4c8dnjy0nJEwbpUKjmrsUQYArxnGGYgr7iGu5iBkkkm6wM&s=10'],
            ['name' => 'TEQUILA ROSE', 'category' => 'Tequila', 'description' => '', 'price' => 1150, 'stock' => 0, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRo8zyziFoFAaZ0iAMEKucBGWh0xndRQeZbYqPGx9lZXZPq_ICClyzzyLkJ&s=10'],
            ['name' => 'MOJITOS', 'category' => 'Tequila', 'description' => '', 'price' => 320, 'stock' => 24, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCDf1_qYSKKohAOg1jVBJZxHbMhBIVK6gkIh1s3d9sPA&s=10'],
            ['name' => 'MOJITOS WHITE', 'category' => 'Tequila', 'description' => '', 'price' => 290, 'stock' => 0, 'image' => 'https://clink.ph/cdn/shop/products/WEB-mojitos-silver.png?v=1750646367'],
            ['name' => 'MARGARITA', 'category' => 'Tequila', 'description' => '', 'price' => 185, 'stock' => 0, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNtk2BwpI3EUf5L4rNljBfysljYnhr35ZcJrZwEx2bdA&s=10'],
            ['name' => 'TRIPLE SEC', 'category' => 'Tequila', 'description' => '', 'price' => 320, 'stock' => 0, 'image' => 'https://ralphs.com.ph/cdn/shop/products/Bardinet-Triple-Sec-Liqueur-700ml.png?v=1645428945&width=480'],

            // RED WINE
            ['name' => 'Carlo Rossi CR', 'category' => 'Red Wine', 'description' => '', 'price' => 360, 'stock' => 0, 'image' => 'https://foodpanda.dhmedia.io/image/darkstores/nv-global-catalog/ph/8cbc58e7-d714-4a73-ad86-e3ed2ee924b9.jpg?height=480'],
            ['name' => 'Carlo Rossi RM', 'category' => 'Red Wine', 'description' => '', 'price' => 360, 'stock' => 0, 'image' => 'https://foodpanda.dhmedia.io/image/darkstores/nv-global-catalog/ph/3bbd65d3-f1ae-4ad2-a3dc-a95f4040d2f3.jpg?height=480'],
            ['name' => 'CHARLES & JAMES', 'category' => 'Red Wine', 'description' => '', 'price' => 330, 'stock' => 0, 'image' => 'https://boozeshop.ph/cdn/shop/files/charles_james1L.jpg?v=1755835471'],
            ['name' => 'NOVELLINO RUSSO', 'category' => 'Red Wine', 'description' => '', 'price' => 355, 'stock' => 12, 'image' => 'https://shopsuki.ph/cdn/shop/files/4806508630000a_1024x.jpg?v=1748601710'],
            ['name' => 'NOVELLINO SPARKLING', 'category' => 'Red Wine', 'description' => '', 'price' => 355, 'stock' => 12, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkGY51cpyTO9q3qErSlfdpvHHTVaacQAwoFkzusOqlPg&s=10'],
            ['name' => 'NOVELLINO STRAWBERRY', 'category' => 'Red Wine', 'description' => '', 'price' => 355, 'stock' => 12, 'image' => 'https://images.freshop.ncrcloud.com/1564405684715621347/7fef65881eeb8f52596883f80bc57afa_large.png'],
            ['name' => 'NOVELLINO WILDCLKBRY', 'category' => 'Red Wine', 'description' => '', 'price' => 355, 'stock' => 12, 'image' => 'https://store.iloilosupermart.com/wp-content/uploads/2020/12/6565.jpg'],
            ['name' => 'PRIMERA', 'category' => 'Red Wine', 'description' => '', 'price' => 173, 'stock' => 24, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQD2b7uATthvKzrohTPbkBeXHPncZbqz577KIF86IRY6g&s=10'],

            // WHISKEY
            ['name' => 'CHIVAS', 'category' => 'Whiskey', 'description' => '', 'price' => 880, 'stock' => 0, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0G-vhTMxmFWe-j2velnlhyWIWT8TVBW1KkZ1PR91S1Q&s=10'],
            ['name' => 'JW Black Label REG', 'category' => 'Whiskey', 'description' => '', 'price' => 0, 'stock' => 0, 'image' => 'https://ralphs.com.ph/cdn/shop/products/JW_BLACK_700ml.png?v=1599097449'],
            ['name' => 'JW Black Label 1L', 'category' => 'Whiskey', 'description' => '', 'price' => 0, 'stock' => 0, 'image' => 'https://ralphs.com.ph/cdn/shop/products/johnnie-walker-black-label-12-year-old-blended-scotch-whisky.png?v=1599097449'],
            ['name' => 'JD REG', 'category' => 'Whiskey', 'description' => '', 'price' => 1190, 'stock' => 0, 'image' => 'https://ralphs.com.ph/cdn/shop/products/JACK_DANIELS_700ML.png?v=1599097443&width=480'],
            ['name' => 'JD 1L', 'category' => 'Whiskey', 'description' => '', 'price' => 1588, 'stock' => 0, 'image' => 'https://ralphs.com.ph/cdn/shop/products/JACK_DANIELS_700ML.png?v=1599097443&width=480'],
            ['name' => 'RED LABEL', 'category' => 'Whiskey', 'description' => '', 'price' => 0, 'stock' => 0, 'image' => 'https://images.ctfassets.net/waruwpig3jxu/5uXjsPl0sDoZ1CeA4DN20Q/abb26f986ba5e919d9231b99c3b4c02d/red-750ml_producthero_fullfront_desktop.webp'],
            ['name' => 'SUNTORRY Whisky', 'category' => 'Whiskey', 'description' => '', 'price' => 1550, 'stock' => 5, 'image' => 'https://ralphs.com.ph/cdn/shop/files/SuntoryWhisky700ml22.png?v=1710321488'],
            ['name' => 'WHITE CASTLE 69', 'category' => 'Whiskey', 'description' => '', 'price' => 205, 'stock' => 24, 'image' => 'https://shopsuki.ph/cdn/shop/files/102052203_2_800x.png?v=1686899764'],
            ['name' => 'WHITE CASTLE LIGHTS', 'category' => 'Whiskey', 'description' => '', 'price' => 185, 'stock' => 24, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoLMgiQt453XFwNfDtM_ODxDqn4AY506ZmWXu1chnko6uznIblx-yJgEQ&s=10'],

            // BEVERAGES
            ['name' => '1.5 LITRO COKE', 'category' => 'Beverages', 'description' => '', 'price' => 75, 'stock' => 0, 'image' => 'https://clink.ph/cdn/shop/products/MicrosoftTeams-image_142.png?v=1750646189'],
            ['name' => '1.5 LITRO COKE 0', 'category' => 'Beverages', 'description' => '', 'price' => 75, 'stock' => 0, 'image' => 'https://ever.ph/cdn/shop/files/100000026726-Coke-Coca-Cola-Zero-Sugar-No-Calories-PET-1.5L-230206.jpg?v=1676528484'],
            ['name' => '1.5 LITRO SPRITE', 'category' => 'Beverages', 'description' => '', 'price' => 75, 'stock' => 0, 'image' => 'https://store.iloilosupermart.com/wp-content/uploads/2020/05/989656-scaled.jpg'],
            ['name' => '5 GAL', 'category' => 'Beverages', 'description' => '', 'price' => 40, 'stock' => 50, 'image' => 'https://img.lazcdn.com/g/p/68e5d1f6aa01965c6c5b65acbf800e1e.jpg_960x960q80.jpg_.webp'],
            ['name' => 'AQUA 350ML', 'category' => 'Beverages', 'description' => '', 'price' => 7.5, 'stock' => 120, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvLDN_5AhUYbCoa4BT3NFuvlWP9TqKLEmweI-hEPavugmsu-7YL8-aS1o&s=10'],
            ['name' => 'AQUA 500ML ', 'category' => 'Beverages', 'description' => '', 'price' => 9, 'stock' => 120, 'image' => 'https://imartgrocersph.com/wp-content/uploads/2020/08/Aqua-Sweet-Purified-Drinking-Water-500mL.jpg'],
            ['name' => 'COKE', 'category' => 'Beverages', 'description' => '', 'price' => 37, 'stock' => 120, 'image' => 'https://www.gfsstore.com/wp-content/uploads/2025/11d/328398-IPG-6-1762899827.jpg'],
            ['name' => 'COKE MISMO', 'category' => 'Beverages', 'description' => '', 'price' => 37, 'stock' => 0, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTz9b14hN9LRQzuCIrfm78utbdrXC0NtH9KOKPtHFKMsQ&s=10'],
            ['name' => 'COKE 0', 'category' => 'Beverages', 'description' => '', 'price' => 37, 'stock' => 120, 'image' => 'https://www.coca-cola.com/content/dam/onexp/us/en/brands/coca-cola-zero/kozs-prod-og.png'],
            ['name' => 'DM FOURSEASON', 'category' => 'Beverages', 'description' => '', 'price' => 37, 'stock' => 48, 'image' => 'https://cdn.store-assets.com/s/377840/i/16437920.jpeg'],
            ['name' => 'DM MANGO', 'category' => 'Beverages', 'description' => '', 'price' => 44, 'stock' => 120, 'image' => 'https://cdn.store-assets.com/s/377840/i/16437919.jpeg'],
            ['name' => 'DM ORANGE', 'category' => 'Beverages', 'description' => '', 'price' => 35, 'stock' => 0, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTX3w4n8D-OPydR3LYj1vRE5W7EaUpUBdP2lP1VTWwCHw&s=10'],
            ['name' => 'DM PINEAPPLE', 'category' => 'Beverages', 'description' => '', 'price' => 35, 'stock' => 120, 'image' => 'https://store.iloilosupermart.com/wp-content/uploads/2020/05/655789.jpg'],
            ['name' => 'INFERNO', 'category' => 'Beverages', 'description' => '', 'price' => 520, 'stock' => 0, 'image' => 'https://boozeshop.ph/cdn/shop/files/inferno_flaming_rum.png?v=1739341752'],
            ['name' => 'MM ORANGE', 'category' => 'Beverages', 'description' => '', 'price' => 32, 'stock' => 120, 'image' => 'https://foodpanda.dhmedia.io/image/darkstores/nv-global-catalog/ph/c11803d5-687b-4971-b229-f65cb8f4fe35.jpg?height=480'],
            ['name' => 'NATURE SPRING 500', 'category' => 'Beverages', 'description' => '', 'price' => 10, 'stock' => 120, 'image' => 'https://store.iloilosupermart.com/wp-content/uploads/2020/05/purified-500ml.png'],
            ['name' => 'NATURE SPRING 350', 'category' => 'Beverages', 'description' => '', 'price' => 8.5, 'stock' => 120, 'image' => 'https://store.iloilosupermart.com/wp-content/uploads/2020/05/purified-500ml.png'],
            ['name' => 'NEW GAL ROUND', 'category' => 'Beverages', 'description' => '', 'price' => 200, 'stock' => 0, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVYfGjwHga4g68z-kxRJ7IHrbO_zLmy-SzN5MIQgqyKL-BO5OQUiUcQfDn&s=10'],
            ['name' => 'NEW GAL SLIM', 'category' => 'Beverages', 'description' => '', 'price' => 200, 'stock' => 0, 'image' => 'https://down-ph.img.susercontent.com/file/ph-11134207-7r98r-lu1r4bgfj5pue3'],
            ['name' => 'OOLONG TEA', 'category' => 'Beverages', 'description' => '', 'price' => 70, 'stock' => 1500, 'image' => 'https://valuemartgrocery.com/cdn/shop/products/SuntoryOolongNoSugar.png?v=1665634221'],
            ['name' => 'ROBIFF O TEA', 'category' => 'Beverages', 'description' => '', 'price' => 70, 'stock' => 0, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcinHa_zkV941ZgfUuM0Xaw8CA5ycjEnPiwKwXx2yfZBjR4TdBopV89hsT&s=10'],
            ['name' => 'ROYAL', 'category' => 'Beverages', 'description' => '', 'price' => 37, 'stock' => 120, 'image' => 'https://www.coca-cola.com/content/dam/onexp/ph/en/brands/royal/ph-royal-orange-updated.png'],
            ['name' => 'SODA WATER', 'category' => 'Beverages', 'description' => '', 'price' => 43, 'stock' => 120, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmZwU1DN8ZRqsjJ31Bf3BqrhbhLDfYiPOnHWvwEA2u8Q&s=10'],
            ['name' => 'SPRITE', 'category' => 'Beverages', 'description' => '', 'price' => 37, 'stock' => 120, 'image' => 'https://www.coca-cola.com/content/dam/onexp/us/en/brands/sprite/products/en_sprite_prod_12oz-can_750x750_v1.jpg'],
            ['name' => 'SPRITE MISMO', 'category' => 'Beverages', 'description' => '', 'price' => 27, 'stock' => 0, 'image' => 'https://primomart.ph/cdn/shop/files/4801981118601_989851ed-c7ad-4500-9203-0fbfd5da2463_1024x1024.jpg?v=1754894268'],
            ['name' => 'SUMMIT 350ml', 'category' => 'Beverages', 'description' => '', 'price' => 27, 'stock' => 120, 'image' => 'https://asiabrewery.com/cdn/shop/files/SUMMIT-2023-350ML_800x.jpg?v=1742785242'],
            ['name' => 'SUMMIT 500ml', 'category' => 'Beverages', 'description' => '', 'price' => 13, 'stock' => 120, 'image' => 'https://asiabrewery.com/cdn/shop/files/SUMMIT-2023-500ML_1200x.jpg?v=1742785242'],
            ['name' => 'TONIC WATER', 'category' => 'Beverages', 'description' => '', 'price' => 43, 'stock' => 120, 'image' => 'https://boozeshop.ph/cdn/shop/files/schweppes_1.jpg?v=1739259427'],

            // OTHERS
            ['name' => 'ALFONSO', 'category' => 'Whiskey', 'description' => '', 'price' => 275, 'stock' => 24, 'image' => 'https://ralphs.com.ph/cdn/shop/products/Alfonso-Light-1750ml.png?v=1665380885&width=480'],
            ['name' => 'ALFONSO LITRO', 'category' => 'Whiskey', 'description' => '', 'price' => 330, 'stock' => 0, 'image' => 'https://ralphs.com.ph/cdn/shop/products/Alfonso-Light-1750ml.png?v=1665380885&width=480'],
            ['name' => 'BAILEYS', 'category' => 'Whiskey', 'description' => '', 'price' => 935, 'stock' => 0, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPBotwD81TKBuvC-54nOfrZJdQwfzuunJDp0pql_P42VqXSiOpmEXNL1qd&s=10'],
            ['name' => 'EMPERADOR LIGHTS', 'category' => 'Whiskey', 'description' => '', 'price' => 165, 'stock' => 0, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8hz7wox37OcVYM6MKPfyV_ZvripA84mcu6v9oeFegWPng2ESKuEunalY&s=10'],
            ['name' => 'GRENADINE', 'category' => 'Beverages', 'description' => '', 'price' => 270, 'stock' => 0, 'image' => 'https://boozeshop.ph/cdn/shop/files/walshgrenadinev2.png?v=1744686413'],
            ['name' => 'KAHLUA', 'category' => 'Whiskey', 'description' => '', 'price' => 890, 'stock' => 0, 'image' => 'https://assets.kahlua.com/wp-content/uploads/2020/12/Kahlua-Original-US-70cl-new.png?tr=q-80,w-1800'],
            ['name' => 'LIME JUICE', 'category' => 'Beverages', 'description' => '', 'price' => 140, 'stock' => 0, 'image' => 'https://images-na.ssl-images-amazon.com/images/I/71YCxpVKCbS.jpg'],
            ['name' => 'NAPOLEON', 'category' => 'Whiskey', 'description' => '', 'price' => 165, 'stock' => 24, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpaiHUgrTW4snNV5p9Yz_oS6c3ZMw8A_F4J0yJfGIHAw&s=10'],
            ['name' => 'NAPOLEON IICHIKO', 'category' => 'Soju', 'description' => '', 'price' => 1050, 'stock' => 0, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKd6qqW6zwhScRTTodn9Sxl3bBzmI6eSiThnsdeQKrnjVZuSWFiBRXVG_V&s=10'],
            ['name' => 'TOSKA', 'category' => 'Whiskey', 'description' => '', 'price' => 250, 'stock' => 0, 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXAH2_pZRL3J5vKWT6c7pown4_6feUHL_jvrNG-2U0uubD28uCwoOX6ngn&s=10'],
        ];

        $this->db->table('products')->insertBatch($products);
    }
}
