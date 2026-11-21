<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#D6C3A2]">

    <?= view('components/header') ?>

    <main class="mx-auto px-6 py-8 container">

        <h2 class="mb-8 font-bold text-gray-800 text-3xl">
            Dashboard Overview
        </h2>

        <!-- Statistics -->
        <div class="gap-6 grid md:grid-cols-5">

            <div class="bg-white shadow p-6 rounded-xl">
                <h3 class="text-gray-500">Products</h3>
                <p class="mt-2 font-bold text-blue-900 text-4xl">
                    <?= (int) $products ?>
                </p>
            </div>

            <div class="bg-white shadow p-6 rounded-xl">
                <h3 class="text-gray-500">Sales</h3>
                <p class="mt-2 font-bold text-green-600 text-4xl">
                    <?= (int) $sales ?>
                </p>
            </div>

            <div class="bg-white shadow p-6 rounded-xl">
                <h3 class="text-gray-500">Users</h3>
                <p class="mt-2 font-bold text-purple-600 text-4xl">
                    <?= (int) $users ?>
                </p>
            </div>

            <div class="bg-white shadow p-6 rounded-xl">
                <h3 class="text-gray-500">Inventory Records</h3>
                <p class="mt-2 font-bold text-orange-600 text-4xl">
                    <?= (int) $inventory ?>
                </p>
            </div>

            <div class="bg-white shadow p-6 rounded-xl">
                <h3 class="text-gray-500">Restock Requests</h3>
                <p class="mt-2 font-bold text-red-600 text-4xl">
                    <?= (int) $restockCount ?>
                </p>
            </div>

        </div>

        <!-- Quick Actions -->
        <h2 class="mt-10 mb-4 font-bold text-2xl">
            Quick Actions
        </h2>

        <div class="gap-6 grid md:grid-cols-3">
            <a
                href="<?= base_url('admin/suppliers') ?>"
                class="bg-blue-900 hover:bg-blue-800 shadow p-6 rounded-xl text-white hover:scale-105 transition">

                <h3 class="font-bold text-xl">
                    Suppliers
                </h3>

                <p class="mt-2 text-sm">
                    Add supplier deliveries and update stock.
                </p>

            </a>

            <a
                href="<?= base_url('admin/inventory') ?>"
                class="bg-green-600 hover:bg-green-500 shadow p-6 rounded-xl text-white hover:scale-105 transition">

                <h3 class="font-bold text-xl">
                    Inventory
                </h3>

                <p class="mt-2 text-sm">
                    View stock in and stock out records.
                </p>

            </a>

            <a
                href="<?= base_url('admin/sales') ?>"
                class="bg-purple-700 hover:bg-purple-600 shadow p-6 rounded-xl text-white hover:scale-105 transition">

                <h3 class="font-bold text-xl">
                    Sales Reports
                </h3>

                <p class="mt-2 text-sm">
                    View customer orders and sales.
                </p>

            </a>

        </div>

        <!-- Recent Activity -->
        <div class="bg-white shadow mt-10 p-6 rounded-xl">

            <div class="flex justify-between items-center mb-4">

                <h2 class="font-bold text-2xl">
                    Recent Activity
                </h2>

                <span class="bg-red-600 px-3 py-1 rounded-full text-white">
                    <?= (int) $restockCount ?>
                    pending request<?= $restockCount == 1 ? '' : 's' ?>
                </span>

            </div>

            <?php if (!empty($recentActivity)): ?>

                <ul class="space-y-3">

                    <?php foreach ($recentActivity as $activity): ?>

                        <li class="<?= esc($activity['class']) ?> p-4 border-l-4 rounded-lg">

                            <div class="flex items-start gap-3">

                                <span class="text-xl">
                                    <?= esc($activity['icon']) ?>
                                </span>

                                <div class="w-full">

                                    <?php if (($activity['type'] ?? '') === 'restock_request'): ?>

                                        <p class="font-semibold text-gray-800">
                                            <?= esc($activity['message']) ?>
                                        </p>

                                        <div class="gap-4 grid md:grid-cols-2 mt-3 text-gray-700 text-sm">

                                            <p>
                                                <strong>Company:</strong>
                                                <?= esc($activity['company_name']) ?>
                                            </p>

                                            <p>
                                                <strong>Product:</strong>
                                                <?= esc($activity['product_name']) ?>
                                            </p>

                                            <p>
                                                <strong>Quantity needed:</strong>
                                                <?= (int) $activity['quantity'] ?>
                                            </p>

                                            <p>
                                                <strong>Needed by:</strong>
                                                <?= esc($activity['needed_by']) ?>
                                            </p>

                                            <p>
                                                <strong>Requested by:</strong>
                                                <?= esc($activity['requester_name']) ?>
                                            </p>

                                            <p>
                                                <strong>Email:</strong>
                                                <?= esc($activity['requester_email']) ?>
                                            </p>

                                        </div>

                                    <?php else: ?>

                                        <p class="font-semibold text-gray-800">
                                            <?= esc($activity['message']) ?>
                                        </p>

                                    <?php endif; ?>

                                    <p class="mt-2 text-gray-500 text-sm">
                                        <?= esc($activity['date']) ?>
                                    </p>

                                </div>

                            </div>

                        </li>

                    <?php endforeach; ?>

                </ul>

            <?php else: ?>

                <p class="text-gray-500">
                    No recent activity.
                </p>

            <?php endif; ?>

        </div>

    </main>

    <?= view('components/footer') ?>

</body>

</html>