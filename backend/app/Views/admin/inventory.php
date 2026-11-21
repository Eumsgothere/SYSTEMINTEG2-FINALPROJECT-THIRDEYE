<?= view('components/head', ['title' => 'Inventory']) ?>
<?= view('components/header') ?>

<div class="mx-auto px-6 py-10 container">

    <div class="flex justify-between items-center mb-8">
        <h1 class="font-bold text-[#af1e1e] text-4xl">
            Inventory Management
        </h1>

        <a
            href="<?= base_url('admin/products/create') ?>"
            class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded-lg text-white">
            + Add Product
        </a>
    </div>

    <!-- SUMMARY CARDS -->
    <div class="gap-4 grid md:grid-cols-4 mb-8">

        <div class="bg-white shadow p-5 rounded-xl">
            <h3 class="text-gray-500 text-sm">Total Products</h3>
            <p class="mt-2 font-bold text-3xl">
                <?= count($products) ?>
            </p>
        </div>

        <div class="bg-green-50 shadow p-5 rounded-xl">
            <h3 class="text-green-700 text-sm">In Stock</h3>
            <p class="mt-2 font-bold text-green-700 text-3xl">
                <?= $inStock ?>
            </p>
        </div>

        <div class="bg-yellow-50 shadow p-5 rounded-xl">
            <h3 class="text-yellow-700 text-sm">Low Stock</h3>
            <p class="mt-2 font-bold text-yellow-700 text-3xl">
                <?= $lowStock ?>
            </p>
        </div>

        <div class="bg-red-50 shadow p-5 rounded-xl">
            <h3 class="text-red-700 text-sm">Out of Stock</h3>
            <p class="mt-2 font-bold text-red-700 text-3xl">
                <?= $outOfStock ?>
            </p>
        </div>

    </div>

    <!-- SEARCH -->
    <div class="mb-6">
        <input
            type="text"
            id="inventory-search"
            placeholder="Search products..."
            class="px-4 py-3 border rounded-lg w-full">
    </div>

    <!-- TABLE -->
    <div class="bg-white shadow rounded-xl overflow-x-auto">

        <table class="w-full">

            <thead class="bg-[#af1e1e] text-white">
                <tr>

                    <th class="px-4 py-3 text-left">
                        Image
                    </th>

                    <th class="px-4 py-3 text-left">
                        Product
                    </th>

                    <th class="px-4 py-3 text-left">
                        Category
                    </th>

                    <th class="px-4 py-3 text-left">
                        Price
                    </th>

                    <th class="px-4 py-3 text-left">
                        Stock
                    </th>

                    <th class="px-4 py-3 text-left">
                        Status
                    </th>

                    <th class="px-4 py-3 text-center">
                        Actions
                    </th>

                </tr>
            </thead>

            <tbody>

                <?php foreach ($products as $product): ?>

                    <tr class="border-b inventory-row">

                        <td class="px-4 py-3">

                            <img
                                src="<?= $product['image'] ?>"
                                class="rounded-lg w-14 h-14 object-cover">

                        </td>

                        <td class="px-4 py-3 font-semibold">
                            <?= $product['name'] ?>
                        </td>

                        <td class="px-4 py-3">
                            <?= $product['category'] ?>
                        </td>

                        <td class="px-4 py-3">
                            ₱<?= number_format($product['price'], 2) ?>
                        </td>

                        <td class="px-4 py-3">
                            <?= $product['stock'] ?>
                        </td>

                        <td class="px-4 py-3">

                            <?php if ($product['stock'] == 0): ?>

                                <span class="bg-red-100 px-3 py-1 rounded-full text-red-700 text-sm">
                                    Out of Stock
                                </span>

                            <?php elseif ($product['stock'] <= 10): ?>

                                <span class="bg-yellow-100 px-3 py-1 rounded-full text-yellow-700 text-sm">
                                    Low Stock
                                </span>

                            <?php else: ?>

                                <span class="bg-green-100 px-3 py-1 rounded-full text-green-700 text-sm">
                                    In Stock
                                </span>

                            <?php endif; ?>

                        </td>

                        <td class="px-4 py-3 text-center">

                            <div class="flex justify-center gap-2">

                                <a
                                    href="<?= base_url('admin/products/edit/' . $product['id']) ?>"
                                    class="bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-white">
                                    Edit
                                </a>

                                <a
                                    href="<?= base_url('admin/products/delete/' . $product['id']) ?>"
                                    class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-white"
                                    onclick="return confirm('Delete this product?')">
                                    Delete
                                </a>

                            </div>

                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</div>

<script>
    document.getElementById('inventory-search').addEventListener('input', function() {

        const query = this.value.toLowerCase();

        document.querySelectorAll('.inventory-row').forEach(row => {

            const text = row.textContent.toLowerCase();

            row.style.display = text.includes(query) ?
                '' :
                'none';

        });

    });
</script>

<?= view('components/footer') ?>