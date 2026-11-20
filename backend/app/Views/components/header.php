<nav class="top-0 z-50 sticky bg-[#8a1e1e] shadow-lg text-white">

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

            <a href="/" class="inline-block hover:text-[#FFB0B0] hover:scale-110 transition transition-all duration-300">
                Home
            </a>

            <a href="/products" class="inline-block hover:text-[#FFB0B0] hover:scale-110 transition transition-all duration-300">
                Products
            </a>

            <a href="/contact" class="inline-block hover:text-[#FFB0B0] hover:scale-110 transition transition-all duration-300">
                Contact
            </a>
            <a
                href="<?= base_url('orders') ?>"
                class="inline-block hover:text-[#FFB0B0] hover:scale-110 transition transition-all duration-300">
                My Orders
            </a>
            <?php if (session()->get('logged_in')): ?>

                <?php $cartItemCount = array_sum((array) session()->get('cart')); ?>

                <a
                    href="<?= base_url('cart') ?>"
                    class="inline-block relative hover:text-[#FFB0B0] hover:scale-110 transition transition-all duration-300">
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
                        class="inline-block hover:text-yellow-300 hover:scale-110 transition transition-all duration-300">
                        Admin Dashboard
                    </a>
                    <a
                        href="<?= base_url('/admin/suppliers') ?>"
                        class="inline-block hover:text-yellow-300 hover:scale-110 transition-all duration-300">
                        Suppliers
                    </a>
                    <a
                        href="<?= base_url('/admin/inventory') ?>"
                        class="inline-block hover:text-yellow-300 hover:scale-110 transition transition-all duration-300">
                        Inventory
                    </a>

                <?php endif; ?>

                <a
                    href="/logout"
                    class="inline-block bg-red-600 hover:bg-red-500 px-4 py-2 rounded-lg font-semibold text-white hover:scale-110 transition transition-all duration-300">
                    Logout
                </a>

            <?php else: ?>

                <a
                    href="/signup"
                    class="inline-block hover:bg-white px-4 py-2 border-2 border-black rounded-lg font-semibold text-black hover:text-black hover:scale-110 transition transition-all duration-300">
                    Sign Up
                </a>
                <a
                    href="/login"
                    class="inline-block bg-white hover:bg-[#949494] px-4 py-2 rounded-lg font-semibold text-black hover:scale-110 transition transition-all duration-300">
                    Login
                </a>

            <?php endif; ?>

        </div>

    </div>

</nav>