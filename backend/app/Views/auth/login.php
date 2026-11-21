<!DOCTYPE html>
<html>
<?= view('components/header') ?>

<head>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#D6C3A2]">

    <div class="flex justify-center items-center min-h-screen">

        <div class="bg-white shadow-lg p-8 rounded-lg w-full max-w-md">

            <h2 class="mb-6 font-bold text-3xl text-center">
                Admin Login
            </h2>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="bg-green-100 mb-4 p-3 rounded text-green-600">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="bg-red-100 mb-4 p-3 rounded text-red-600">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('/authenticate') ?>" method="post">

                <div class="mb-4">
                    <label>Email</label>
                    <input
                        type="email"
                        name="email"
                        class="px-4 py-2 border rounded w-full">
                </div>

                <div class="mb-4">
                    <label>Password</label>
                    <input
                        type="password"
                        name="password"
                        class="px-4 py-2 border rounded w-full">
                </div>

                <button
                    type="submit"
                    class="inline-block bg-[#af1e1e] hover:bg-[#eb2525] py-2 rounded w-full text-white hover:scale-110 transition-all duration-300">
                    Login
                </button>

            </form>

        </div>

    </div>

</body>
<?= view('components/footer') ?>

</html>