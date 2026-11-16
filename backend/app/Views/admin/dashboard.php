<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <?= view('components/header') ?>

    <div class="mx-auto px-6 py-8 container">

        <h2 class="mb-8 font-bold text-gray-800 text-3xl">
            Dashboard Overview
        </h2>

        <!-- Statistics -->
        <div class="gap-6 grid md:grid-cols-4">

            <div class="bg-white shadow p-6 rounded-xl">
                <h3 class="text-gray-500">Products</h3>
                <p class="mt-2 font-bold text-blue-900 text-4xl">
                    <?= $products ?>
                </p>
            </div>

            <div class="bg-white shadow p-6 rounded-xl">
                <h3 class="text-gray-500">Sales</h3>
                <p class="mt-2 font-bold text-green-600 text-4xl">
                    <?= $sales ?>
                </p>
            </div>

            <div class="bg-white shadow p-6 rounded-xl">
                <h3 class="text-gray-500">Users</h3>
                <p class="mt-2 font-bold text-purple-600 text-4xl">
                    <?= $users ?>
                </p>
            </div>

            <div class="bg-white shadow p-6 rounded-xl">
                <h3 class="text-gray-500">Inventory Records</h3>
                <p class="mt-2 font-bold text-orange-600 text-4xl">
                    <?= $inventory ?>
                </p>
            </div>

        </div>

        <!-- Quick Actions -->
        <h2 class="mt-10 mb-4 font-bold text-2xl">
            Quick Actions
        </h2>

        <div class="gap-6 grid md:grid-cols-3">

            <a
                href="<?= base_url('/admin/products') ?>"
                class="bg-blue-900 hover:bg-blue-800 shadow p-6 rounded-xl text-white transition">

                <h3 class="font-bold text-xl">
                    Manage Products
                </h3>

                <p class="mt-2 text-sm">
                    Add, edit and delete products.
                </p>

            </a>

            <a
                href="<?= base_url('/admin/inventory') ?>"
                class="bg-green-600 hover:bg-green-500 shadow p-6 rounded-xl text-white transition">

                <h3 class="font-bold text-xl">
                    Inventory
                </h3>

                <p class="mt-2 text-sm">
                    Stock in and stock out management.
                </p>

            </a>

            <a
                href="<?= base_url('/admin/sales') ?>"
                class="bg-purple-700 hover:bg-purple-600 shadow p-6 rounded-xl text-white transition">

                <h3 class="font-bold text-xl">
                    Sales Reports
                </h3>

                <p class="mt-2 text-sm">
                    View transactions and reports.
                </p>

            </a>

        </div>

        <!-- Recent Activity -->
        <div class="bg-white shadow mt-10 p-6 rounded-xl">

            <h2 class="mb-4 font-bold text-2xl">
                Recent Activity
            </h2>

            <ul class="space-y-3 text-gray-700">
                <li>✅ New product added</li>
                <li>✅ Inventory updated</li>
                <li>✅ Customer account registered</li>
            </ul>

        </div>

    </div>

    <?= view('components/footer') ?>

</body>

</html>