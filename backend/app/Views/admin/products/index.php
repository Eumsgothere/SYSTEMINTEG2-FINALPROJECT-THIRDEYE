<!DOCTYPE html>
<html>

<head>
    <title>Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <?= view('components/header') ?>

    <div class="mx-auto px-6 py-8 container">

        <div class="flex justify-between items-center mb-6">

            <h1 class="font-bold text-3xl">
                Products
            </h1>

            <a
                href="<?= base_url('/admin/products/create') ?>"
                class="bg-green-600 hover:bg-green-500 px-4 py-2 rounded-lg text-white">
                Add Product
            </a>

        </div>

        <div class="bg-white shadow rounded-lg overflow-hidden">

            <table class="w-full">

                <thead class="bg-blue-900 text-white">

                    <tr>
                        <th class="p-3 text-left">ID</th>
                        <th class="p-3 text-left">Name</th>
                        <th class="p-3 text-left">Category</th>
                        <th class="p-3 text-left">Price</th>
                        <th class="p-3 text-left">Stock</th>
                        <th class="p-3 text-left">Actions</th>
                    </tr>

                </thead>

                <tbody>

                    <?php if (!empty($products)): ?>

                        <?php foreach ($products as $product): ?>

                            <tr class="hover:bg-gray-50 border-b">

                                <td class="p-3">
                                    <?= $product['id'] ?>
                                </td>

                                <td class="p-3">
                                    <?= $product['name'] ?>
                                </td>

                                <td class="p-3">
                                    <?= $product['category'] ?>
                                </td>

                                <td class="p-3">
                                    ₱<?= number_format($product['price'], 2) ?>
                                </td>

                                <td class="p-3">
                                    <?= $product['stock'] ?>
                                </td>

                                <td class="p-3">

                                    <div class="flex gap-2">

                                        <a
                                            href="<?= base_url('/admin/products/edit/' . $product['id']) ?>"
                                            class="bg-blue-500 hover:bg-blue-400 px-3 py-1 rounded text-white">
                                            Edit
                                        </a>

                                        <a
                                            href="<?= base_url('/admin/products/delete/' . $product['id']) ?>"
                                            onclick="return confirm('Delete this product?')"
                                            class="bg-red-600 hover:bg-red-500 px-3 py-1 rounded text-white">
                                            Delete
                                        </a>

                                    </div>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>

                            <td colspan="6" class="p-6 text-gray-500 text-center">
                                No products found.
                            </td>

                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>

    </div>

    <?= view('components/footer') ?>

</body>

</html>