<!DOCTYPE html>
<html>

<head>
    <title>Suppliers</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#D6C3A2]">

    <?= view('components/header') ?>

    <div class="mx-auto px-6 py-8 container">

        <div class="flex justify-between items-center mb-6">

            <h1 class="font-bold text-3xl">
                Suppliers
            </h1>

            <a
                href="<?= base_url('/admin/suppliers/create') ?>"
                class="inline-block bg-[#2b2620] hover:bg-[#423931] px-4 py-2 rounded-lg text-white hover:scale-110 transition-all duration-300">
                + Add Supplier
            </a>

        </div>

        <div class="bg-white shadow rounded-lg overflow-hidden">

            <table class="w-full">

                <thead class="bg-[#af1e1e] text-white">
                    <tr>
                        <th class="p-3 text-left">ID</th>
                        <th class="p-3 text-left">Supplier Name</th>
                        <th class="p-3 text-left">TIN</th>
                        <th class="p-3 text-left">Sales Invoice No.</th>
                        <th class="p-3 text-left">Products Supplied</th>
                        <th class="p-3 text-left">Total Quantity</th>
                        <th class="p-3 text-left">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    <?php if (!empty($suppliers)): ?>

                        <?php foreach ($suppliers as $supplier): ?>

                            <tr class="hover:bg-gray-50 border-b">

                                <td class="p-3">
                                    <?= $supplier['id'] ?>
                                </td>

                                <td class="p-3 font-medium">
                                    <?= $supplier['supplier_name'] ?>
                                </td>

                                <td class="p-3">
                                    <?= $supplier['tin'] ?>
                                </td>

                                <td class="p-3">
                                    <?= $supplier['sales_invoice_no'] ?>
                                </td>

                                <td class="p-3">
                                    <?= $supplier['products_supplied'] ?>
                                </td>
                                <td class="p-3">
                                    <?= $supplier['total_quantity'] ?>
                                </td>

                                <td class="p-3">

                                    <div class="flex gap-2">

                                        <a
                                            href="<?= base_url('/admin/suppliers/edit/' . $supplier['id']) ?>"
                                            class="inline-block bg-blue-500 hover:bg-blue-400 px-3 py-1 rounded text-white hover:scale-110 transition-all duration-300">
                                            Edit
                                        </a>

                                        <form
                                            action="<?= base_url('admin/suppliers/delete/' . (int) $supplier['id']) ?>"
                                            method="post"
                                            onsubmit="return confirm('Delete this supplier delivery?')">

                                            <?= csrf_field() ?>

                                            <button
                                                type="submit"
                                                class="inline-block bg-red-600 hover:bg-red-500 px-3 py-1 rounded text-white hover:scale-110 transition-all duration-300">
                                                Delete
                                            </button>
                                        </form>

                                    </div>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>

                            <td colspan="6" class="p-6 text-gray-500 text-center">
                                No suppliers found.
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