<?php

$products = [
    [
        'name' => 'Jinro 24',
        'category' => 'Soju',
        'price' => '₱265'
    ],
    [
        'name' => 'Carlo Rossi',
        'category' => 'Red Wine',
        'price' => '₱360'
    ],
    [
        'name' => 'Jose Cuervo Lit',
        'category' => 'Tequila',
        'price' => '₱1200'
    ],
    [
        'name' => 'Jack Daniel Reg',
        'category' => 'Brandy/Whiskey',
        'price' => '₱1190'
    ]
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Floe Consumer Goods Trading</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100">

    <!-- NAVBAR -->
    <nav class="bg-blue-900 text-white">
        <div class="flex justify-between mx-auto px-6 py-4 container">

            <h1 class="font-bold text-2xl">
                Floe Consumer Goods Trading
            </h1>

            <div class="space-x-4">
                <a href="/" class="hover:text-yellow-300">Home</a>
                <a href="/products" class="hover:text-yellow-300">Products</a>
                <a href="/contact" class="hover:text-yellow-300">Contact</a>
            </div>

        </div>
    </nav>

    <!-- HERO -->
    <section class="bg-blue-800 py-20 text-white">

        <div class="mx-auto text-center container">

            <h1 class="mb-4 font-bold text-5xl">
                Beyond Water
            </h1>

            <p class="mb-8 text-xl">
                Alcoholic and Non-Alcoholic Beverages for Retail and Bulk Orders
            </p>

            <a href="/products"
                class="bg-yellow-400 px-8 py-3 rounded-lg font-bold text-black">
                View Pricelist
            </a>

        </div>

    </section>

    <!-- CATEGORIES -->
    <section class="mx-auto py-16 container">

        <h2 class="mb-10 font-bold text-3xl text-center">
            Product Categories
        </h2>

        <div class="gap-6 grid md:grid-cols-5">

            <div class="bg-white shadow p-6 rounded text-center">
                🥤
                <h3 class="mt-2 font-bold">Non Alcoholic</h3>
            </div>

            <div class="bg-white shadow p-6 rounded text-center">
                🍶
                <h3 class="mt-2 font-bold">Soju</h3>
            </div>

            <div class="bg-white shadow p-6 rounded text-center">
                🌵
                <h3 class="mt-2 font-bold">Tequila</h3>
            </div>

            <div class="bg-white shadow p-6 rounded text-center">
                🍷
                <h3 class="mt-2 font-bold">Red Wine</h3>
            </div>

            <div class="bg-white shadow p-6 rounded text-center">
                🥃
                <h3 class="mt-2 font-bold">Brandy / Whiskey</h3>
            </div>

        </div>

    </section>

    <!-- PRODUCTS -->
    <section class="bg-white py-16">

        <div class="mx-auto container">

            <h2 class="mb-10 font-bold text-3xl text-center">
                Popular Products
            </h2>

            <div class="gap-6 grid md:grid-cols-4 px-4">

                <?php foreach ($products as $product): ?>

                    <div class="shadow p-6 border rounded-lg">

                        <h3 class="font-bold text-xl">
                            <?= $product['name']; ?>
                            <?= $product['price']; ?>
                            </p>

                            <button class="bg-blue-900 mt-4 py-2 rounded w-full text-white">
                                Order Now
                            </button>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </section>

    <!-- CONTACT -->
    <section class="bg-blue-50 py-16">

        <div class="mx-auto text-center container">

            <h2 class="mb-4 font-bold text-4xl">
                Contact Us
            </h2>

            <h3 class="font-bold text-blue-900 text-3xl">
                NOE CAPAPAS
            </h3>

            <p class="mt-2 text-2xl">
                09688573230
            </p>

        </div>

    </section>

    <!-- FOOTER -->
    <footer class="bg-blue-900 py-6 text-white text-center">

        <h3 class="font-bold">
            Floe Consumer Goods Trading
        </h3>

        <p>
            Business Inventory System & E-Commerce Integration
        </p>

    </footer>

</body>

</html>