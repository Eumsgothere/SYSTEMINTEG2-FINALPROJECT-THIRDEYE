<nav class="top-0 z-50 sticky bg-blue-900 shadow-lg text-white">

    <div class="flex justify-between items-center mx-auto px-6 py-4 container">

        <!-- Logo -->
        <div>
            <h1 class="font-bold text-2xl">
                Floe Consumer Goods Trading
            </h1>
            <p class="text-gray-200 text-xs">
                Beyond Water
            </p>
        </div>

        <!-- Navigation -->
        <div class="flex items-center space-x-6">

            <a href="/" class="hover:text-yellow-300 transition">
                Home
            </a>

            <a href="/products" class="hover:text-yellow-300 transition">
                Products
            </a>

            <a href="/contact" class="hover:text-yellow-300 transition">
                Contact
            </a>

            <?php if (session()->get('logged_in')): ?>

                <?php $cartItemCount = array_sum((array) session()->get('cart')); ?>

                <a
                    href="<?= base_url('cart') ?>"
                    class="relative hover:text-yellow-300 transition">
                    Cart
                    <?php if ($cartItemCount > 0): ?>
                        <span class="-top-2 -right-3 absolute bg-yellow-400 px-1.5 rounded-full min-w-5 font-bold text-blue-900 text-xs text-center">
                            <?= (int) $cartItemCount ?>
                        </span>
                    <?php endif; ?>
                </a>

                <?php if (session()->get('role') === 'admin'): ?>

                    <a
                        href="/admin/dashboard"
                        class="hover:text-yellow-300 transition">
                        Admin Dashboard
                    </a>
                    <a
                        href="<?= base_url('/admin/products') ?>"
                        class="hover:text-yellow-300 transition">
                        Manage Products
                    </a>

                <?php endif; ?>

                <a
                    href="/logout"
                    class="bg-red-600 hover:bg-red-500 px-4 py-2 rounded-lg font-semibold text-white transition">
                    Logout
                </a>

            <?php else: ?>

                <a
                    href="/signup"
                    class="hover:bg-yellow-500 px-4 py-2 border-2 border-yellow-500 rounded-lg font-semibold text-yellow-500 hover:text-black transition">
                    Sign Up
                </a>
                <a
                    href="/login"
                    class="bg-yellow-500 hover:bg-yellow-400 px-4 py-2 rounded-lg font-semibold text-black transition">
                    Login
                </a>

            <?php endif; ?>

        </div>

    </div>

</nav>
