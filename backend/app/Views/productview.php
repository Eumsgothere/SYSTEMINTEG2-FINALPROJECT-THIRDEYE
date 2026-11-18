<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['title' => esc($product['name']) . ' | Floe Trading Goods']) ?>

<body>
    <?= view('components/header') ?>

    <main class="mx-auto px-6 py-10 container">
        <a
            href="<?= base_url('products') ?>"
            class="inline-flex items-center gap-2 mb-6 font-medium text-blue-900 hover:text-blue-700">
            <span aria-hidden="true">&larr;</span>
            Back to Products
        </a>

        <article class="bg-white shadow-sm border border-gray-200 rounded-2xl overflow-hidden">
            <div class="gap-10 grid lg:grid-cols-2 p-6 md:p-10">
                <div class="flex justify-center items-center bg-gray-100 rounded-xl min-h-[320px] overflow-hidden">
                    <img
                        src="<?= esc($product['image'] ?: 'https://via.placeholder.com/700x520?text=No+Image') ?>"
                        alt="<?= esc($product['name']) ?>"
                        class="w-full h-full max-h-[520px] object-contain">
                </div>

                <div class="flex flex-col justify-center">
                    <p class="font-semibold text-blue-900 text-sm uppercase tracking-[0.2em]">
                        Product Details
                    </p>

                    <h1 class="mt-3 font-bold text-gray-900 text-3xl md:text-4xl">
                        <?= esc($product['name']) ?>
                    </h1>

                    <p class="mt-2 text-gray-500">
                        Product ID: <span class="font-semibold text-gray-700">#<?= (int) $product['id'] ?></span>
                    </p>

                    <div class="mt-8 pt-6 border-gray-200 border-t">
                        <p class="text-gray-500 text-sm">Price</p>
                        <p class="mt-1 font-bold text-blue-900 text-3xl">
                            &#8369;<?= number_format((float) $product['price'], 2) ?>
                        </p>
                    </div>

                    <div class="mt-6">
                        <p class="text-gray-500 text-sm">Remaining Stock</p>
                        <p class="mt-1 font-semibold <?= ((int) $product['stock'] > 0) ? 'text-green-600' : 'text-red-600' ?>">
                            <?= (int) $product['stock'] ?> available
                        </p>
                    </div>

                    <div class="mt-8 pt-6 border-gray-200 border-t">
                        <h2 class="font-semibold text-gray-900 text-lg">Description</h2>
                        <p class="mt-3 text-gray-600 leading-7">
                            <?= esc($product['description'] ?: 'No description available.') ?>
                        </p>

                        <div class="flex sm:flex-row flex-col gap-3 mt-8">
                            <button
                                type="button"
                                data-product-id="<?= (int) $product['id'] ?>"
                                <?= ((int) $product['stock'] < 1) ? 'disabled' : '' ?>
                                class="flex-1 bg-blue-900 hover:bg-blue-800 disabled:bg-gray-300 px-5 py-3 rounded-lg font-semibold text-white disabled:text-gray-500 transition">
                                Add to Cart
                            </button>

                            <a
                                href="<?= base_url('restock-request/' . (int) $product['id']) ?>"
                                class="flex-1 px-5 py-3 border border-red-600 hover:bg-red-50 rounded-lg font-semibold text-red-600 text-center transition">
                                Request Restock
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>

</body>

</html>
