<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['title' => 'Checkout']) ?>

<body class="bg-[#D6C3A2]">
    <?= view('components/header') ?>

    <main class="mx-auto px-6 py-10 container">
        <div class="mb-8">
            <h1 class="font-bold text-gray-900 text-3xl">Checkout</h1>
            <p class="mt-2 text-gray-500">
                Review your order before placing it.
            </p>
        </div>

        <?php if ($success = session()->getFlashdata('success')): ?>
            <div class="bg-green-50 mb-6 px-6 py-4 border border-green-200 rounded-lg text-green-700">
                <?= esc($success) ?>
            </div>
        <?php endif; ?>

        <?php if ($error = session()->getFlashdata('error')): ?>
            <div class="bg-red-50 mb-6 px-6 py-4 border border-red-200 rounded-lg text-red-700">
                <?= esc($error) ?>
            </div>
        <?php endif; ?>

        <?php if (empty($items)): ?>

            <section class="bg-white shadow-sm p-12 border border-gray-200 rounded-2xl text-center">
                <p class="font-semibold text-gray-800 text-xl">
                    Your cart is empty.
                </p>

                <a
                    href="<?= base_url('products') ?>"
                    class="inline-block bg-blue-900 hover:bg-blue-800 mt-6 px-5 py-3 rounded-lg font-semibold text-white transition">
                    Browse Products
                </a>
            </section>

        <?php else: ?>

            <section class="bg-white shadow-sm border border-gray-200 rounded-2xl overflow-hidden">

                <div class="px-6 py-5 border-gray-200 border-b">
                    <h2 class="font-bold text-gray-900 text-xl">
                        Order Summary
                    </h2>

                    <p class="mt-1 text-gray-500">
                        <?= (int) $itemCount ?>
                        item<?= $itemCount === 1 ? '' : 's' ?>
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
                                    <h3 class="font-semibold text-gray-900">
                                        <?= esc($product['name']) ?>
                                    </h3>

                                    <p class="mt-1 text-gray-500 text-sm">
                                        Product ID:
                                        #<?= (int) $product['id'] ?>
                                    </p>

                                    <p class="mt-1 text-gray-600 text-sm">
                                        Quantity:
                                        <?= (int) $item['quantity'] ?>
                                    </p>
                                </div>

                            </div>

                            <div class="sm:text-right">
                                <p class="text-gray-500 text-sm">
                                    &#8369;<?= number_format((float) $product['price'], 2) ?>
                                    each
                                </p>

                                <p class="mt-1 font-bold text-blue-900">
                                    &#8369;<?= number_format((float) $item['line_total'], 2) ?>
                                </p>
                            </div>

                        </li>
                    <?php endforeach; ?>

                </ul>

                <div class="flex justify-between items-center bg-gray-50 px-6 py-5 border-gray-200 border-t">
                    <span class="font-semibold text-gray-900">
                        Total
                    </span>

                    <span class="font-bold text-blue-900 text-2xl">
                        &#8369;<?= number_format((float) $total, 2) ?>
                    </span>
                </div>

            </section>

            <form
                action="<?= base_url('checkout/complete') ?>"
                method="post"
                class="flex justify-end gap-3 mt-6">

                <?= csrf_field() ?>

                <a
                    href="<?= base_url('cart') ?>"
                    class="px-5 py-3 border border-gray-300 rounded-lg font-semibold text-gray-700">
                    Back to Cart
                </a>

                <button
                    type="submit"
                    class="bg-blue-900 hover:bg-blue-800 px-6 py-3 rounded-lg font-semibold text-white transition">
                    Place Order
                </button>

            </form>

        <?php endif; ?>

    </main>

    <?= view('components/footer') ?>

</body>

</html>