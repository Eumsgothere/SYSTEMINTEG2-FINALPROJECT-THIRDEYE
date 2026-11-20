<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['title' => 'My Orders']) ?>

<body>
    <?= view('components/header') ?>

    <main class="mx-auto px-6 py-10 container">
        <h1 class="mb-8 font-bold text-gray-900 text-3xl">
            My Orders
        </h1>

        <?php if (empty($orders)): ?>

            <section class="bg-white shadow-sm p-12 border border-gray-200 rounded-2xl text-center">
                <p class="font-semibold text-gray-800 text-xl">
                    You have no orders yet.
                </p>

                <a
                    href="<?= base_url('products') ?>"
                    class="inline-block bg-blue-900 hover:bg-blue-800 mt-6 px-5 py-3 rounded-lg font-semibold text-white">
                    Browse Products
                </a>
            </section>

        <?php else: ?>

            <div class="space-y-6">

                <?php foreach ($orders as $order): ?>

                    <section class="bg-white shadow-sm border border-gray-200 rounded-2xl overflow-hidden">

                        <div class="flex sm:flex-row flex-col sm:justify-between gap-3 bg-gray-50 px-6 py-5 border-gray-200 border-b">
                            <div>
                                <h2 class="font-bold text-gray-900 text-xl">
                                    Order #<?= (int) $order['id'] ?>
                                </h2>

                                <p class="mt-1 text-gray-500 text-sm">
                                    <?= esc($order['created_at']) ?>
                                </p>
                            </div>

                            <span class="self-start bg-green-100 px-3 py-1 rounded-full font-semibold text-green-700 text-sm">
                                <?= esc(ucfirst($order['status'])) ?>
                            </span>
                        </div>

                        <div class="divide-y divide-gray-200">

                            <?php foreach ($order['items'] as $item): ?>

                                <div class="flex justify-between items-center gap-4 px-6 py-4">
                                    <div>
                                        <h3 class="font-semibold text-gray-900">
                                            <?= esc($item['product_name']) ?>
                                        </h3>

                                        <p class="mt-1 text-gray-500 text-sm">
                                            Quantity:
                                            <?= (int) $item['quantity'] ?>
                                            ×
                                            &#8369;<?= number_format((float) $item['price'], 2) ?>
                                        </p>
                                    </div>

                                    <strong class="text-blue-900">
                                        &#8369;<?= number_format((float) $item['subtotal'], 2) ?>
                                    </strong>
                                </div>

                            <?php endforeach; ?>

                        </div>

                        <div class="flex justify-between items-center px-6 py-5 border-gray-200 border-t">
                            <span class="font-semibold text-gray-900">
                                Order Total
                            </span>

                            <span class="font-bold text-blue-900 text-xl">
                                &#8369;<?= number_format((float) $order['total_amount'], 2) ?>
                            </span>
                        </div>

                    </section>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>
    </main>

    <?= view('components/footer') ?>

</body>

</html>