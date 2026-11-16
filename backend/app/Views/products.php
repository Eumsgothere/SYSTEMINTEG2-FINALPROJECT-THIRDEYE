<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['title' => 'Products']) ?>

<body>

    <?= view('components/header') ?>

    <!-- PAGE HEADER -->
    <section class="bg-blue-900 py-20 text-white">
        <div class="mx-auto px-6 text-center container">
            <h1 class="font-bold text-5xl">
                Our Products
            </h1>
            <p class="mt-4 text-lg">
                Browse our selection of wines, liquors, and beverages.
            </p>
        </div>
    </section>

    <!-- SEARCH -->
    <section class="bg-white py-8">
        <div class="mx-auto px-6 container">
            <input
                type="text"
                placeholder="Search Products..."
                class="shadow-sm px-4 py-3 border rounded-lg w-full">
        </div>
    </section>

    <!-- PRODUCT GRID -->
    <section class="py-16">
        <div class="mx-auto px-6 container">

            <?php

            $products = [

                // SOJU
                ['name' => 'JINRO', 'category' => 'Soju', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'CHAMISOL', 'category' => 'Soju', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'CHUMCHURUM', 'category' => 'Soju', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'IICHIKO', 'category' => 'Soju', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'KUROKIRISHIMA', 'category' => 'Soju', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],

                // TEQUILA
                ['name' => 'CUERVO REG', 'category' => 'Tequila', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'CUERVO LIT', 'category' => 'Tequila', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'TEQ ROSE', 'category' => 'Tequila', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'MOJITOS', 'category' => 'Tequila', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'MOJITOS WHITE', 'category' => 'Tequila', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'MARGARITA', 'category' => 'Tequila', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'TRIPLE SEC', 'category' => 'Tequila', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],

                // RED WINE
                ['name' => 'Carlo Rossi CR', 'category' => 'Red Wine', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'Carlo Rossi RM', 'category' => 'Red Wine', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'CHARLES & JAMES', 'category' => 'Red Wine', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'NOV RUSSO', 'category' => 'Red Wine', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'NOV SPARKLING', 'category' => 'Red Wine', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'NOV STRAWBERRY', 'category' => 'Red Wine', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'NOV WILDCLKBRY', 'category' => 'Red Wine', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'PRIMERA', 'category' => 'Red Wine', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'TAKIP', 'category' => 'Red Wine', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],

                // WHISKEY
                ['name' => 'CHIVAS', 'category' => 'Whiskey', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'JW Black Label REG', 'category' => 'Whiskey', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'JW Black Label 1L', 'category' => 'Whiskey', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'JD REG', 'category' => 'Whiskey', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'JD 1L', 'category' => 'Whiskey', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'RED LABEL', 'category' => 'Whiskey', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'SUNTORRY Whisky', 'category' => 'Whiskey', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'WHITE CASTLE 69', 'category' => 'Whiskey', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'WHITE CASTLE LIG', 'category' => 'Whiskey', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'BAILEYS', 'category' => 'Whiskey', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],

                // BEVERAGES
                ['name' => '1.5 LIT COKE', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => '1.5 LIT COKE 0', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => '1.5 LIT SPRITE', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => '5 GAL', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'AQUA 350ML 24', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'AQUA 350ML 40', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'AQUA 500ML 30', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'AQUA 500ML 24', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'COKE', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'COKE MISMO', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'COKE 0', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'DM FOURSEASON', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'DM MANGO', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'DM ORANGE', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'DM PINEAPPLE', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'INFERNO', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'MM ORANGE', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'NATURE SPRING 500', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'NATURE SPRING 350', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'NEW GAL ROUND', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'NEW GAL SLIM', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'OOLONG TEA', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'ROBIFF O TEA', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'ROYAL', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'SODA WATER', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'SPRITE', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'SPRITE MISMO', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'SUMMIT 350ml', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'SUMMIT 500ml', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],
                ['name' => 'TONIC WATER', 'category' => 'Beverages', 'price' => 0, 'image' => 'https://via.placeholder.com/400x300'],

            ];
            ?>

            <div class="gap-8 grid md:grid-cols-4">

                <?php foreach ($products as $product): ?>

                    <div class="bg-white shadow-lg hover:shadow-2xl rounded-2xl overflow-hidden transition">

                        <img
                            src="<?= $product['image'] ?>"
                            alt="<?= $product['name'] ?>"
                            class="w-full h-60 object-cover">

                        <div class="p-5">

                            <span class="bg-blue-100 px-3 py-1 rounded-full text-blue-900 text-xs">
                                <?= $product['category'] ?>
                            </span>

                            <h3 class="mt-4 font-bold text-xl">
                                <?= $product['name'] ?>
                            </h3>

                            <p class="mt-3 font-bold text-blue-900 text-2xl">
                                ₱<?= number_format($product['price'], 2) ?>
                            </p>

                            <div class="flex gap-2 mt-4">
                                <button class="flex-1 bg-blue-900 hover:bg-blue-800 py-2 rounded-lg text-white">
                                    Add to Cart
                                </button>

                                <button class="px-4 py-2 border border-blue-900 rounded-lg text-blue-900">
                                    View
                                </button>
                            </div>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="bg-blue-900 py-20 text-white">
        <div class="mx-auto px-6 text-center container">
            <h2 class="font-bold text-4xl">
                Looking for Bulk Orders?
            </h2>

            <p class="mt-4 text-lg">
                Contact us for wholesale pricing and business partnerships.
            </p>

            <a
                href="<?= base_url('/contact') ?>"
                class="inline-block bg-white mt-6 px-6 py-3 rounded-lg font-semibold text-blue-900">
                Contact Us
            </a>
        </div>
    </section>
    <?= view('components/footer') ?>
</body>

</html>