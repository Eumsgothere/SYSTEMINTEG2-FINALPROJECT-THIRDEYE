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

            <div class="gap-8 grid md:grid-cols-4">

                <?php if (!empty($products)): ?>

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

                <?php else: ?>

                    <p class="col-span-4 text-gray-500 text-center">
                        No products available.
                    </p>

                <?php endif; ?>

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