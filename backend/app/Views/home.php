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

<?= view('components/head', ['title' => 'Floe Trading Goods']) ?>

<body>

    <?= view('components/header') ?>

    <!-- HERO -->
    <section class="relative">

        <img
            src="https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?w=1600"
            class="w-full h-[600px] object-cover">

        <div class="absolute inset-0 bg-black/60"></div>

        <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center">

            <h1 class="mb-4 font-bold text-6xl">
                FLOE CONSUMER GOODS
            </h1>

            <p class="mb-6 text-xl">
                Supplier of Wines, Liquors, Soju & Beverages
            </p>

            <div class="space-x-4">
                <button class="bg-yellow-500 hover:bg-yellow-600 px-6 py-3 rounded-lg font-bold">
                    Shop Now
                </button>

                <button class="px-6 py-3 border border-white rounded-lg">
                    View Pricelist
                </button>
            </div>

        </div>

    </section>

    <!-- CATEGORIES -->
    <section class="bg-white py-16">

        <div class="mx-auto px-6 container">

            <h2 class="mb-12 font-bold text-4xl text-center">
                Shop By Category
            </h2>

            <div class="gap-6 grid md:grid-cols-5">

                <div class="bg-blue-50 shadow-lg p-8 rounded-xl text-center">
                    <div class="text-5xl">🍶</div>
                    <h3 class="mt-3 font-bold">Soju</h3>
                </div>

                <div class="bg-blue-50 shadow-lg p-8 rounded-xl text-center">
                    <div class="text-5xl">🌵</div>
                    <h3 class="mt-3 font-bold">Tequila</h3>
                </div>

                <div class="bg-blue-50 shadow-lg p-8 rounded-xl text-center">
                    <div class="text-5xl">🍷</div>
                    <h3 class="mt-3 font-bold">Red Wine</h3>
                </div>

                <div class="bg-blue-50 shadow-lg p-8 rounded-xl text-center">
                    <div class="text-5xl">🥃</div>
                    <h3 class="mt-3 font-bold">Whiskey</h3>
                </div>

                <div class="bg-blue-50 shadow-lg p-8 rounded-xl text-center">
                    <div class="text-5xl">🥤</div>
                    <h3 class="mt-3 font-bold">Beverages</h3>
                </div>

            </div>

        </div>

    </section>

    <!-- PRODUCTS -->
    <section id="products" class="bg-gray-100 py-16">

        <div class="mx-auto px-6 container">

            <h2 class="mb-12 font-bold text-4xl text-center">
                Popular Products
            </h2>

            <div class="gap-8 grid md:grid-cols-4">

                <?php
                $products = [
                    ["Jinro 24", "₱265"],
                    ["Ichiko", "₱1,050"],
                    ["Jose Cuervo Reg", "₱880"],
                    ["Jose Cuervo Lit", "₱1,200"],
                    ["Carlo Rossi", "₱360"],
                    ["Novellino", "₱355"],
                    ["Jack Daniel's", "₱1,190"],
                    ["Alfonso Light", "₱275"]
                ];

                foreach ($products as $product):
                ?>

                    <div class="bg-white shadow-lg rounded-xl overflow-hidden">

                        https://images.unsplash.com/photo-1584916201218-f4242ceb4809?w=600 >

                        <div class="p-5">

                            <h3 class="font-bold text-xl">
                                <?= $product[0] ?>
                            </h3>

                            <p class="mt-4 font-bold text-blue-900 text-2xl">
                                <?= $product[1] ?>
                            </p>

                            <button
                                class="bg-blue-900 hover:bg-blue-700 mt-4 py-2 rounded-lg w-full text-white">
                                Add To Cart
                            </button>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </section>

    <!-- COMPANY STATS -->
    <section class="bg-blue-900 py-16 text-white">

        <div class="mx-auto px-6 container">

            <div class="gap-10 grid md:grid-cols-4 text-center">

                <div>
                    <h2 class="font-bold text-5xl">500+</h2>
                    <p>Happy Customers</p>
                </div>

                <div>
                    <h2 class="font-bold text-5xl">50+</h2>
                    <p>Products</p>
                </div>

                <div>
                    <h2 class="font-bold text-5xl">24/7</h2>
                    <p>Online Orders</p>
                </div>

                <div>
                    <h2 class="font-bold text-5xl">100%</h2>
                    <p>Inventory Tracking</p>
                </div>

            </div>

        </div>

    </section>

    <!-- WHY CHOOSE US -->
    <section class="bg-white py-16">

        <div class="mx-auto px-6 container">

            <h2 class="mb-12 font-bold text-4xl text-center">
                Why Choose Us
            </h2>

            <div class="gap-8 grid md:grid-cols-4 text-center">

                <div>
                    <div class="text-6xl">📦</div>
                    <h3 class="mt-3 font-bold">Real-Time Inventory</h3>
                </div>

                <div>
                    <div class="text-6xl">🚚</div>
                    <h3 class="mt-3 font-bold">Fast Delivery</h3>
                </div>

                <div>
                    <div class="text-6xl">🔒</div>
                    <h3 class="mt-3 font-bold">Secure Ordering</h3>
                </div>

                <div>
                    <div class="text-6xl">📊</div>
                    <h3 class="mt-3 font-bold">Sales Monitoring</h3>
                </div>

            </div>

        </div>

    </section>

    <!-- LOCATION -->
    <section id="contact" class="bg-white py-16">

        <div class="mx-auto px-6 container">

            <h2 class="mb-12 font-bold text-4xl text-center">
                Find Our Store
            </h2>

            <div class="gap-10 grid lg:grid-cols-3">

                <!-- MAP -->
                <div class="lg:col-span-2 shadow-xl rounded-2xl overflow-hidden">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.433690828177!2d120.97998461135703!3d14.574346177658768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ca2bfd7d0be3%3A0xdd0920283b64f77c!2sLuz%20Henson%20Building%2C%20494%20Soldado%20St%2C%20Ermita%2C%20Manila%2C%201000%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1792741191672!5m2!1sen!2sph"
                        class="w-full h-[500px]"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin">
                    </iframe>

                </div>

                <!-- SHOP DETAILS -->


                <div class="flex flex-col justify-center">

                    <h3 class="font-bold text-blue-900 text-3xl">
                        Floe Consumer Goods Trading
                    </h3>

                    <p class="mt-6 text-lg">
                        📍 494 Soldado St, Ermita, Manila, 1000 Metro Manila
                    </p>

                    <p class="mt-2 text-lg">
                        📞 09688573230
                    </p>

                    <p class="mt-2 text-lg">
                        🕘 Monday - Sunday
                    </p>

                    <p class="mt-2 text-lg">
                        5:00 PM - 12:00 AM
                    </p>

                    https://maps.app.goo.gl/HBGafXimntBixBEo6
                    Get Directions
                    </a>

                </div>

            </div>

        </div>

    </section>

    <!-- FOOTER -->
    <?= view('components/footer') ?>

</body>

</html>