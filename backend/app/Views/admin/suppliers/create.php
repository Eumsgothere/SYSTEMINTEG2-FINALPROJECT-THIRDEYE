<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['title' => 'Add Supplier']) ?>

<body class="bg-gray-100">

    <?= view('components/header') ?>

    <div class="mx-auto px-6 py-10 max-w-3xl">

        <h1 class="mb-6 font-bold text-3xl">
            Add Supplier
        </h1>

        <form
            action="<?= base_url('admin/suppliers/store') ?>"
            method="post"
            class="bg-white shadow p-6 rounded-xl">

            <?= csrf_field() ?>

            <!-- Supplier Name -->
            <label class="block mb-2 font-semibold">
                Supplier Name
            </label>

            <select
                name="supplier_name"
                required
                class="mb-4 px-4 py-3 border rounded-lg w-full">

                <option value="">Select supplier</option>
                <option value="CLIGAN">CLIGAN</option>
                <option value="METROWINE">METROWINE</option>
                <option value="WINES SPECIALIST & BEYOND">WINES SPECIALIST & BEYOND</option>
                <option value="GENECELLAR">GENECELLAR</option>
                <option value="CASH AND CARRY">CASH AND CARRY</option>
                <option value="SOUTHEASRASIA RETAIL INC">SOUTHEASRASIA RETAIL INC</option>
                <option value="MAGNATE">MAGNATE</option>
                <option value="WIN2 MART">WIN2 MART</option>
                <option value="TBL">TBL</option>
                <option value="4K2B CONSUMER GOODS">4K2B CONSUMER GOODS</option>
                <option value="MACAPAGAL">MACAPAGAL</option>
                <option value="CONVOY MKTG CORP">CONVOY MKTG CORP</option>
                <option value="HARRY'S LIQUORMART">HARRY'S LIQUORMART</option>
                <option value="PWS">PWS</option>
                <option value="PUREGOLD">PUREGOLD</option>
                <option value="POPMART">POPMART</option>
                <option value="HARRISSON">HARRISSON</option>
                <option value="SUPER 8">SUPER 8</option>
                <option value="MEIMEI MART">MEIMEI MART</option>
                <option value="DRINK ALL">DRINK ALL</option>
            </select>

            <!-- TIN -->
            <label class="block mb-2 font-semibold">
                TIN
            </label>

            <input
                type="text"
                name="tin"
                required
                class="mb-4 px-4 py-3 border rounded-lg w-full">

            <!-- Sales Invoice -->
            <label class="block mb-2 font-semibold">
                Sales Invoice Number
            </label>

            <input
                type="text"
                name="sales_invoice_no"
                required
                class="mb-4 px-4 py-3 border rounded-lg w-full">

            <!-- Products -->
            <label class="block mb-2 font-semibold">
                Products Supplied
            </label>

            <div id="products-container">

                <div class="flex gap-3 mb-3 product-row">

                    <select
                        name="product_id[]"
                        required
                        class="px-4 py-3 border rounded-lg w-full">

                        <option value="">Select product</option>

                        <?php foreach ($products as $product): ?>
                            <option value="<?= esc($product['id']) ?>">
                                <?= esc($product['name']) ?>
                            </option>
                        <?php endforeach; ?>

                    </select>

                    <input
                        type="number"
                        name="product_quantity[]"
                        min="1"
                        value="1"
                        required
                        class="px-4 py-3 border rounded-lg w-32">

                    <button
                        type="button"
                        onclick="removeProduct(this)"
                        class="bg-red-600 hover:bg-red-700 px-4 rounded-lg text-white">
                        Remove
                    </button>

                </div>

            </div>

            <button
                type="button"
                onclick="addProduct()"
                class="bg-green-600 hover:bg-green-700 mb-6 px-4 py-2 rounded-lg text-white">
                + Add Another Product
            </button>

            <!-- Buttons -->
            <div class="flex gap-3">

                <a
                    href="<?= base_url('admin/suppliers') ?>"
                    class="bg-gray-300 hover:bg-gray-400 px-5 py-3 rounded-lg">
                    Cancel
                </a>

                <button
                    type="submit"
                    class="bg-blue-900 hover:bg-blue-800 px-5 py-3 rounded-lg text-white">
                    Save Supplier
                </button>

            </div>

        </form>

    </div>

    <?= view('components/footer') ?>

    <script>
        function addProduct() {
            const container = document.getElementById('products-container');
            const firstRow = document.querySelector('.product-row');
            const newRow = firstRow.cloneNode(true);

            newRow.querySelector('select').value = '';
            newRow.querySelector('input').value = 1;

            container.appendChild(newRow);
        }

        function removeProduct(button) {
            const rows = document.querySelectorAll('.product-row');

            if (rows.length > 1) {
                button.closest('.product-row').remove();
            }
        }
    </script>

</body>

</html>