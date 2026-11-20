<!DOCTYPE html>
<html lang="en">

<?= view('components/head', ['title' => 'Request Restock']) ?>

<body class="bg-[#D6C3A2]">

    <?= view('components/header') ?>

    <div class="mx-auto px-6 py-12 max-w-xl">

        <h1 class="mb-2 font-bold text-3xl">
            Request Restock
        </h1>

        <p class="mb-6 text-gray-600">
            Product: <?= esc($product['name']) ?>
        </p>

        <form
            action="<?= base_url('restock-request') ?>"
            method="post"
            class="bg-white shadow p-6 rounded-xl">

            <?= csrf_field() ?>

            <input
                type="hidden"
                name="product_id"
                value="<?= esc($product['id']) ?>">

            <label class="block mb-1">Company Name</label>
            <input
                type="text"
                name="company_name"
                required
                class="mb-4 px-3 py-2 border rounded-lg w-full">

            <label class="block mb-1">Contact Person</label>
            <input
                type="text"
                name="name"
                required
                class="mb-4 px-3 py-2 border rounded-lg w-full">

            <label class="block mb-1">Email</label>
            <input
                type="email"
                name="email"
                required
                class="mb-4 px-3 py-2 border rounded-lg w-full">

            <label class="block mb-1">Quantity Needed</label>
            <input
                type="number"
                name="quantity"
                min="1"
                value="1"
                required
                class="mb-4 px-3 py-2 border rounded-lg w-full">

            <label class="block mb-1">Date Needed</label>
            <input
                type="date"
                name="needed_by"
                required
                class="mb-6 px-3 py-2 border rounded-lg w-full">

            <button
                type="submit"
                class="inline-block bg-[#af1e1e] hover:bg-[#eb2525] px-4 py-3 rounded-lg w-full text-white hover:scale-105 transition-all duration-300">
                Submit Restock Request
            </button>

        </form>

    </div>

    <?= view('components/footer') ?>

</body>

</html>