<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="/css/output.css">

</head>

<body class="bg-gray-100">

    <div class="flex justify-center items-center h-screen">
        <div class="max-w-md w-full bg-white p-6 rounded-lg shadow-md">
            <?php if (isset($validation)) : ?>
                <p><?= validation_list_errors() ?></p>
            <?php endif; ?>
            <h2 class="text-2xl font-bold mb-6">Add Product</h2>
            <form action="insert" enctype="multipart/form-data" method="post">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="productName">Product Name</label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="productName" type="text" placeholder="Enter product name" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="productDescription">Product Description</label>
                    <textarea class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="description" id="productDescription" placeholder="Enter product description" required></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="productImage">Product Image</label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="image" id="productImage" type="file" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="productPrice">Product Price</label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="price" id="productPrice" type="number" placeholder="Enter product price" required>
                </div>
                <input type="hidden" name="user_id" value="<?= $user_id ?>"><br>
                <div class="flex justify-end">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="submit">Add Product</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>