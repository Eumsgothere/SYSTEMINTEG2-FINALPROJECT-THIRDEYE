<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['title' => 'Checkout']) ?>

<body class="bg-[#D6C3A2]">
    <?= view('components/header') ?>

    <main class="mx-auto px-6 py-10 container">
        <div class="mb-8">
            <h1 class="font-bold text-gray-900 text-3xl">Checkout</h1>
            <p class="mt-2 text-green-600">
                Your cart has been cleared.
            </p>
        </div>

        <?php if (empty($items)): ?>
            <section class="bg-white shadow-sm p-12 border border-gray-200 rounded-2xl text-center">
                <p class="font-semibold text-gray-800 text-xl">There were no items to check out.</p>
                <a
                    href="<?= base_url('products') ?>"
                    class="inline-block inline-block bg-[#af1e1e] hover:bg-[#eb2525] mt-6 px-5 py-3 rounded-lg font-semibold text-white hover:scale-110 transition transition-all duration-300">
                    Browse Products
                </a>
            </section>
        <?php else: ?>
            <section class="bg-white shadow-sm border border-gray-200 rounded-2xl overflow-hidden">
                <div class="px-6 py-5 border-gray-200 border-b">
                    <h2 class="font-bold text-gray-900 text-xl">Items Checked Out</h2>
                    <p class="mt-1 text-gray-500">
                        <?= (int) $itemCount ?> item<?= $itemCount === 1 ? '' : 's' ?>
                    </p>
                </div>

                <ul class="divide-y divide-gray-200">
                    <?php foreach ($items as $item): ?>
                        <?php $product = $item['product']; ?>
                        <li class="flex sm:flex-row flex-col sm:justify-between sm:items-center gap-4 px-6 py-5">
                            <div class="flex items-center gap-4 min-w-0">
                                <img
                                    src="<?= esc($product['image'] ?: 'https://via.placeholder.com/96x96?text=No+Image') ?>"
                                    alt="<?= esc($product['name']) ?>"
                                    class="bg-gray-100 rounded-lg w-20 h-20 object-contain shrink-0">
                                <div class="min-w-0">
                                    <h3 class="font-semibold text-gray-900 truncate">
                                        <?= esc($product['name']) ?>
                                    </h3>
                                    <p class="mt-1 text-gray-500 text-sm">
                                        Product ID: #<?= (int) $product['id'] ?>
                                    </p>
                                    <p class="mt-1 text-gray-600 text-sm">
                                        Quantity: <?= (int) $item['quantity'] ?>
                                    </p>
                                </div>
                            </div>

                            <div class="sm:text-right">
                                <p class="text-gray-500 text-sm">
                                    &#8369;<?= number_format((float) $product['price'], 2) ?> each
                                </p>
                                <p class="mt-1 font-bold text-[#2b2620]">
                                    &#8369;<?= number_format((float) $item['line_total'], 2) ?>
                                </p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <div class="flex justify-between items-center bg-gray-50 px-6 py-5 border-gray-200 border-t">
                    <span class="font-semibold text-gray-900">Total</span>
                    <span class="font-bold text-[#2b2620] text-2xl">
                        &#8369;<?= number_format((float) $total, 2) ?>
                    </span>
                </div>
            </section>

            <div class="mt-6 text-center">
                <a
                    href="<?= base_url('products') ?>"
                    class="inline-block font-medium text-[#af1e1e] hover:scale-110 transition-all duration-300 hover:[#eb2525]">
                    Continue Shopping
                </a>
            </div>
        <?php endif; ?>
    </main>

    <?= view('components/footer') ?>
</body>

</html>