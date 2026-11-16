<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <?= view('components/header') ?>

    <div class="mx-auto px-6 py-8 max-w-2xl container">

        <div class="bg-white shadow p-6 rounded-lg">

            <h1 class="mb-6 font-bold text-3xl">
                Edit Product
            </h1>

            <form
                action="<?= base_url('/admin/products/update/' . $product['id']) ?>"
                method="post">

                <div class="mb-4">

                    <label>Name</label>

                    <input
                        type="text"
                        name="name"
                        value="<?= $product['name'] ?>"
                        class="p-2 border rounded w-full">

                </div>

                <div class="mb-4">

                    <label>Category</label>

                    <select
                        name="category"
                        class="p-2 border rounded w-full">

                        <option <?= $product['category'] == 'Soju' ? 'selected' : '' ?>>
                            Soju
                        </option>

                        <option <?= $product['category'] == 'Tequila' ? 'selected' : '' ?>>
                            Tequila
                        </option>

                        <option <?= $product['category'] == 'Red Wine' ? 'selected' : '' ?>>
                            Red Wine
                        </option>

                        <option <?= $product['category'] == 'Whiskey' ? 'selected' : '' ?>>
                            Whiskey
                        </option>

                        <option <?= $product['category'] == 'Beverages' ? 'selected' : '' ?>>
                            Beverages
                        </option>

                    </select>

                </div>

                <div class="mb-4">

                    <label>Description</label>

                    <textarea
                        name="description"
                        class="p-2 border rounded w-full"><?= $product['description'] ?></textarea>

                </div>

                <div class="mb-4">

                    <label>Price</label>

                    <input
                        type="number"
                        step="0.01"
                        name="price"
                        value="<?= $product['price'] ?>"
                        class="p-2 border rounded w-full">

                </div>

                <div class="mb-4">

                    <label>Stock</label>

                    <input
                        type="number"
                        name="stock"
                        value="<?= $product['stock'] ?>"
                        class="p-2 border rounded w-full">

                </div>

                <div class="mb-6">

                    <label>Image URL</label>

                    <input
                        type="text"
                        name="image"
                        value="<?= $product['image'] ?>"
                        class="p-2 border rounded w-full">

                </div>

                <button
                    type="submit"
                    class="bg-blue-900 px-6 py-2 rounded-lg text-white">
                    Update Product
                </button>

            </form>

        </div>

    </div>

    <?= view('components/footer') ?>

</body>

</html>