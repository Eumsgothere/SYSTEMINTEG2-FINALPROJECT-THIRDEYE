<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['title' => 'Products']) ?>

<body>
    <?php if ($successMessage = session()->getFlashdata('success')): ?>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                alert(<?= json_encode($successMessage) ?>);
            });
        </script>

    <?php endif; ?>

    <?= view('components/header') ?>

    <!-- PAGE HEADER -->
    <section class="py-20 text-white product-banner">
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
    <section class="bg-gradient-to-b from-[#af1e1e] to-[#ffffff] py-8">
        <div class="mx-auto px-6 container">
            <input
                id="product-search"
                type="text"
                placeholder="Search Products..."
                aria-label="Search products"
                class="shadow-sm px-4 py-3 border rounded-lg w-full">
        </div>
    </section>

    <!-- PRODUCT GRID -->
    <section class="py-16">
        <div class="mx-auto px-6 container">

            <div class="gap-8 grid md:grid-cols-4">

                <?php if (!empty($products)): ?>

                    <?php foreach ($products as $product): ?>

                        <div class="bg-white shadow-lg hover:shadow-2xl rounded-2xl overflow-hidden transition product-card">

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
                                    ₱<?= number_format((float)$product['price'], 2) ?>
                                </p>

                                <div class="mt-3">
                                    <?php if ((int)$product['stock'] > 0): ?>
                                        <span class="bg-green-100 px-3 py-1 rounded-full font-semibold text-green-700 text-sm">
                                            ✅ <?= $product['stock'] ?> in stock
                                        </span>
                                    <?php else: ?>
                                        <span class="bg-red-100 px-3 py-1 rounded-full font-semibold text-red-700 text-sm">
                                            ❌ Out of Stock
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <?php if ((int)$product['stock'] > 0): ?>

                                    <div class="flex gap-2 mt-4">

                                        <form action="<?= base_url('cart/add/' . (int)$product['id']) ?>" method="post"
                                            class="flex-[2]">

                                            <?= csrf_field() ?>

                                            <label class="block mb-2 font-medium text-gray-600 text-sm">
                                                Quantity
                                            </label>

                                            <div class="flex items-center gap-2 mt-4">

                                                <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden">

                                                    <button
                                                        type="button"
                                                        onclick="decreaseQty(<?= $product['id'] ?>)"
                                                        class="bg-gray-100 hover:bg-gray-200 px-3 py-2 font-bold">
                                                        −
                                                    </button>

                                                    <input
                                                        type="number"
                                                        id="qty-<?= $product['id'] ?>"
                                                        name="quantity"
                                                        value="1"
                                                        min="1"
                                                        max="<?= $product['stock'] ?>"
                                                        class="border-x focus:outline-none w-12 text-center">

                                                    <button
                                                        type="button"
                                                        onclick="increaseQty(<?= $product['id'] ?>, <?= $product['stock'] ?>)"
                                                        class="bg-gray-100 hover:bg-gray-200 px-3 py-2 font-bold">
                                                        +
                                                    </button>

                                                </div>

                                                <button
                                                    type="submit"
                                                    class="flex-1 bg-blue-900 hover:bg-blue-800 px-4 py-2 rounded-lg font-medium text-white text-sm">
                                                    🛒 Add
                                                </button>

                                                <a
                                                    href="<?= base_url('view-products/' . (int)$product['id']) ?>"
                                                    class="hover:bg-blue-50 px-3 py-2 border border-blue-900 rounded-lg text-blue-900 text-sm">
                                                    View
                                                </a>

                                            </div>

                                        </form>

                                    </div>

                                <?php else: ?>

                                    <a
                                        href="<?= base_url('restock-request/' . $product['id']) ?>"
                                        class="block bg-red-600 hover:bg-red-700 mt-4 px-4 py-2 rounded-lg w-full text-white text-center">
                                        Request Restock
                                    </a>

                                <?php endif; ?>

                            </div>

                        </div>

                    <?php endforeach; ?>

                    <p id="no-search-results" class="hidden col-span-4 text-gray-500 text-center">
                        No products match your search.
                    </p>

                <?php else: ?>

                    <p class="col-span-4 text-gray-500 text-center">
                        No products available.
                    </p>

                <?php endif; ?>

            </div>

        </div>
    </section>
    <style>
        .product-banner {
            /* Top is clear (0% to 50%), fading to solid color at the bottom (100%) */
            background-image:
                linear-gradient(to bottom, rgba(18, 18, 18, 0) 50%, rgb(175, 30, 30) 100%),
                url('https://img.magnific.com/premium-photo/close-up-red-wine-with-swirling-pattern-wine-showcasing-rich-color-aroma_35927-2026.jpg?semt=ais_hybrid&w=740&q=80');

            background-size: cover;
            background-position: top center;
            /* Anchors the top of your image */
            height: 300px;
        }
    </style>
    <script>
        function increaseQty(id, stock) {
            const input = document.getElementById('qty-' + id);

            let value = parseInt(input.value) || 1;

            if (value < stock) {
                input.value = value + 1;
            }
        }

        function decreaseQty(id) {
            const input = document.getElementById('qty-' + id);

            let value = parseInt(input.value) || 1;

            if (value > 1) {
                input.value = value - 1;
            }
        }
    </script>

    <?= view('components/footer') ?>
</body>

</html>