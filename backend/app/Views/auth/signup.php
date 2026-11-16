<!DOCTYPE html>
<html>
<?= view('components/header') ?>

<head>
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class="bg-gray-100">

    <div class="flex justify-center items-center min-h-screen">

        <div class="bg-white shadow-lg p-8 rounded-lg w-full max-w-md">

            <h2 class="mb-6 font-bold text-3xl text-center">
                Create Account
            </h2>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="bg-red-100 mb-4 p-3 rounded text-red-600">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('/register') ?>" method="post">

                <div class="mb-4">
                    <label class="block mb-1">
                        First Name
                    </label>

                    <input
                        type="text"
                        name="first_name"
                        required
                        class="px-4 py-2 border rounded w-full">
                </div>

                <div class="mb-4">
                    <label class="block mb-1">
                        Last Name
                    </label>

                    <input
                        type="text"
                        name="last_name"
                        required
                        class="px-4 py-2 border rounded w-full">
                </div>

                <div class="mb-4">
                    <label class="block mb-1">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        required
                        class="px-4 py-2 border rounded w-full">
                </div>

                <div class="mb-4">
                    <label class="block mb-1">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        required
                        class="px-4 py-2 border rounded w-full">
                </div>

                <div class="mb-6">
                    <label class="block mb-1">
                        Confirm Password
                    </label>

                    <input
                        type="password"
                        name="confirm_password"
                        required
                        class="px-4 py-2 border rounded w-full">
                </div>

                <button
                    type="submit"
                    class="bg-blue-900 hover:bg-blue-800 py-2 rounded w-full text-white">
                    Create Account
                </button>

            </form>

            <p class="mt-4 text-sm text-center">
                Already have an account?

                <a
                    href="<?= base_url('/login') ?>"
                    class="font-semibold text-blue-900 hover:underline">
                    Login Here
                </a>
            </p>

        </div>

    </div>

</body>
<?= view('components/footer') ?>

</html>