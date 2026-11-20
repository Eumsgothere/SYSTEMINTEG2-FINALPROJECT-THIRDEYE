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
                                    ₱<?= number_format((float) $product['price'], 2) ?>
                                </p>

                                <p class="mt-2 font-semibold <?= ((int) $product['stock'] > 0) ? 'text-green-600' : 'text-red-600' ?>">
                                    Stock:
                                    <?= (int) $product['stock'] > 0
                                        ? (int) $product['stock'] . ' available'
                                        : 'Out of stock' ?>
                                </p>

                                <?php if ((int) $product['stock'] > 0): ?>

                                    <div class="flex gap-2 mt-4">
                                        <form action="<?= base_url('cart/add/' . (int) $product['id']) ?>" method="post" class="flex-1">
                                            <?= csrf_field() ?>
                                            <button
                                                type="submit"
                                                class="bg-blue-900 hover:bg-blue-800 py-2 rounded-lg w-full text-white">
                                                Add to Cart
                                            </button>
                                        </form>

                                        <a
                                            href="<?= base_url('view-products/' . (int) $product['id']) ?>"
                                            class="px-4 py-2 border border-blue-900 rounded-lg text-blue-900 text-center">
                                            View
                                        </a>
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

    <script>
        const productSearch = document.getElementById('product-search');
        const productCards = document.querySelectorAll('.product-card');
        const noSearchResults = document.getElementById('no-search-results');

        productSearch.addEventListener('input', function() {
            const query = this.value.trim().toLowerCase();
            let visibleCount = 0;

            productCards.forEach(function(card) {
                const matches = card.textContent.toLowerCase().includes(query);
                card.classList.toggle('hidden', !matches);
                if (matches) visibleCount++;
            });

            if (noSearchResults) {
                noSearchResults.classList.toggle('hidden', visibleCount > 0);
            }
        });
    </script>

    <!-- CTA SECTION -->
    <section class="bg-[#af1e1e] py-20 text-white">
        <div class="mx-auto px-6 text-center container">
            <h2 class="font-bold text-4xl">
                Looking for Bulk Orders?
            </h2>

            <p class="mt-4 text-lg">
                Contact us for wholesale pricing and business partnerships.
            </p>

            <a
                href="<?= base_url('/contact') ?>"
                class="inline-block inline-block bg-white mt-6 px-6 py-3 rounded-lg font-semibold text-[#af1e1e] hover:scale-110 transition-all duration-300">
                Contact Us
            </a>
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

    <?= view('components/footer') ?>
</body>

</html>