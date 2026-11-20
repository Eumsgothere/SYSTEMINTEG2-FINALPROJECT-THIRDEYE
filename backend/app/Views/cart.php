<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['title' => 'Shopping Cart']) ?>

<body class="bg-[#D6C3A2]">
    <?= view('components/header') ?>

    <main class="mx-auto px-6 py-10 container">
        <div class="flex sm:flex-row flex-col sm:justify-between sm:items-center gap-4 mb-8">
            <div>
                <h1 class="font-bold text-gray-900 text-3xl">Shopping Cart</h1>
                <p class="mt-1 text-gray-500">
                    <?= (int) $itemCount ?> item<?= $itemCount === 1 ? '' : 's' ?> in your cart
                </p>
            </div>

            <a
                href="<?= base_url('products') ?>"
                class="inline-block font-medium text-[#af1e1e] hover:scale-110 transition-all duration-300">
                Continue Shopping
            </a>
        </div>

        <?php if ($successMessage = session()->getFlashdata('success')): ?>
            <div class="bg-green-50 mb-6 px-4 py-3 border border-green-200 rounded-lg text-green-700">
                <?= esc($successMessage) ?>
            </div>
        <?php endif; ?>

        <?php if ($errorMessage = session()->getFlashdata('error')): ?>
            <div class="bg-red-50 mb-6 px-4 py-3 border border-red-200 rounded-lg text-red-700">
                <?= esc($errorMessage) ?>
            </div>
        <?php endif; ?>

        <?php if (empty($items)): ?>
            <section class="bg-white shadow-sm p-12 border border-gray-200 rounded-2xl text-center">
                <p class="font-semibold text-gray-800 text-xl">Your cart is empty.</p>
                <p class="mt-2 text-gray-500">Add a product to see it here.</p>
                <a
                    href="<?= base_url('products') ?>"
                    class="inline-block inline-block bg-[#af1e1e] hover:bg-[#eb2525] mt-6 px-5 py-3 rounded-lg font-semibold text-white hover:scale-110 transition transition-all duration-300">
                    Browse Products
                </a>
            </section>
        <?php else: ?>
            <div class="gap-8 grid lg:grid-cols-[1fr_320px]">
                <section class="space-y-4">
                    <div class="hidden gap-4 md:grid grid-cols-[minmax(0,1fr)_120px_150px_100px] bg-white px-6 py-4 border border-gray-200 rounded-xl font-semibold text-gray-500 text-sm">
                        <span>Product</span>
                        <span>Unit Price</span>
                        <span>Quantity</span>
                        <span>Total Price</span>
                    </div>

                    <?php foreach ($items as $item): ?>
                        <?php $product = $item['product']; ?>
                        <article class="bg-white shadow-sm p-5 border border-gray-200 rounded-xl">
                            <div class="items-center gap-5 grid md:grid-cols-[minmax(0,1fr)_120px_150px_100px]">
                                <div class="flex items-center gap-4 min-w-0">
                                    <img
                                        src="<?= esc($product['image'] ?: 'https://via.placeholder.com/120x120?text=No+Image') ?>"
                                        alt="<?= esc($product['name']) ?>"
                                        class="bg-gray-100 rounded-lg w-24 h-24 object-contain shrink-0">

                                    <div class="min-w-0">
                                        <h2 class="font-semibold text-gray-900 truncate">
                                            <?= esc($product['name']) ?>
                                        </h2>
                                        <p class="mt-1 text-gray-500 text-sm">
                                            Product ID: #<?= (int) $product['id'] ?>
                                        </p>
                                        <p class="mt-1 text-green-600 text-sm">
                                            <?= (int) $product['stock'] ?> available
                                        </p>
                                    </div>
                                </div>

                                <div class="md:block flex justify-between mt-4 md:mt-0">
                                    <span class="md:hidden text-gray-500 text-sm">Unit Price</span>
                                    <span class="font-medium text-gray-800">
                                        &#8369;<?= number_format((float) $product['price'], 2) ?>
                                    </span>
                                </div>

                                <form
                                    action="<?= base_url('cart/update/' . (int) $product['id']) ?>"
                                    method="post"
                                    class="flex justify-between md:justify-start items-center gap-3 mt-3 md:mt-0">
                                    <?= csrf_field() ?>
                                    <span class="md:hidden text-gray-500 text-sm">Quantity</span>
                                    <div class="inline-flex border border-gray-300 rounded-lg overflow-hidden">
                                        <button
                                            type="submit"
                                            name="change"
                                            value="-1"
                                            <?= $item['quantity'] <= 1 ? 'disabled' : '' ?>
                                            aria-label="Decrease quantity"
                                            class="hover:bg-gray-100 disabled:opacity-40 px-3 py-1.5 text-gray-700 transition">
                                            &minus;
                                        </button>
                                        <span class="px-4 py-1.5 border-gray-300 border-x text-center">
                                            <?= (int) $item['quantity'] ?>
                                        </span>
                                        <button
                                            type="submit"
                                            name="change"
                                            value="1"
                                            <?= $item['quantity'] >= (int) $product['stock'] ? 'disabled' : '' ?>
                                            aria-label="Increase quantity"
                                            class="hover:bg-gray-100 disabled:opacity-40 px-3 py-1.5 text-gray-700 transition">
                                            +
                                        </button>
                                    </div>
                                </form>

                                <div class="md:block flex justify-between mt-3 md:mt-0">
                                    <span class="md:hidden text-gray-500 text-sm">Total Price</span>
                                    <span class="font-bold text-black">
                                        &#8369;<?= number_format((float) $item['line_total'], 2) ?>
                                    </span>
                                </div>
                            </div>

                            <div class="flex justify-end mt-4 pt-4 border-gray-100 border-t">
                                <form action="<?= base_url('cart/remove/' . (int) $product['id']) ?>" method="post">
                                    <?= csrf_field() ?>
                                    <button type="submit" class="text-red-600 hover:text-red-800 text-sm">
                                        Remove
                                    </button>
                                </form>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </section>

                <aside class="bg-white shadow-sm p-6 border border-gray-200 rounded-xl h-fit">
                    <h2 class="font-bold text-gray-900 text-xl">Cart Summary</h2>
                    <div class="flex justify-between mt-6 text-gray-600">
                        <span>Items</span>
                        <span><?= (int) $itemCount ?></span>
                    </div>
                    <div class="flex justify-between mt-4 pt-4 border-gray-200 border-t">
                        <span class="font-semibold text-gray-900">Total</span>
                        <span class="font-bold text-[#00000] text-xl">
                            &#8369;<?= number_format((float) $total, 2) ?>
                        </span>
                    </div>

                    <form action="<?= base_url('checkout') ?>" method="post" class="mt-6">
                        <?= csrf_field() ?>
                        <button
                            type="submit"
                            class="inline-block bg-[#af1e1e] hover:bg-[#eb2525] px-5 py-3 rounded-lg w-full font-semibold text-white hover:scale-110 transition transition-all duration-300">
                            Checkout
                        </button>
                    </form>
                </aside>
            </div>
        <?php endif; ?>
    </main>

    <?= view('components/footer') ?>
</body>

</html>