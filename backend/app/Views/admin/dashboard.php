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
        <!-- Restock Notifications -->
        <div class="bg-white shadow mt-10 p-6 rounded-xl">

            <div class="flex justify-between items-center mb-4">
                <h2 class="font-bold text-2xl">
                    Restock Requests
                </h2>

                <?php if ($restockCount > 0): ?>
                    <span class="bg-red-600 px-3 py-1 rounded-full text-white">
                        <?= $restockCount ?> new
                    </span>
                <?php endif; ?>
            </div>

            <?php if (!empty($restockRequests)): ?>

                <div class="space-y-4">
                    <?php foreach ($restockRequests as $request): ?>
                        <div class="bg-red-50 p-4 border-red-600 border-l-4 rounded-lg">
                            <p class="font-semibold text-gray-800">
                                Restock requested for:
                                <?= esc($request['product_name'] ?? 'Unknown product') ?>
                            </p>

                            <p class="text-gray-600">
                                Customer: <?= esc($request['name']) ?>
                            </p>

                            <p class="text-gray-600">
                                Email: <?= esc($request['email']) ?>
                            </p>

                            <p class="mt-1 text-gray-400 text-sm">
                                <?= esc($request['created_at']) ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>

            <?php else: ?>

                <p class="text-gray-500">
                    No pending restock requests.
                </p>

            <?php endif; ?>

        </div>
    </div>

    <?= view('components/footer') ?>

</body>

</html>