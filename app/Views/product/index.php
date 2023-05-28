<link rel="stylesheet" href="/css/output.css">

<body class="bg-gray-200">
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-6">Uploaded Products</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
            <?php foreach ($products as $product) : ?>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <div class="h-60 overflow-hidden mb-4">
                        <img src="/uploads/<?= $product['image']; ?>" alt="<?= $product['name'] ?> Image" class="mb-4 ">
                    </div>
                    <h3 class="text-lg font-bold mb-2"><?= $product['name'] ?></h3>
                    <p class="text-gray-700 mb-4">Rp<?= number_format($product['price'], 0, ',', '.') ?></p><!--  -->
                    <div class="flex justify-between items-center">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="<?= url_to('product_update_view') . '?id=' . $product['id'] ?>">Edit</a>
                        <?php if (isset($admin)): if ($admin) : ?>
                            <?php if ($product['verified'] == 0) : ?>
                                <a class="bg-red-500 hover:bg-red-700 text-white py-2 px-1 rounded focus:outline-none focus:shadow-outline" href="<?= url_to('admin_verify_product') . '?id=' . $product['id'] ?>">Not Verified</a>
                                <?php else : ?>
                                    <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="<?= url_to('admin_verify_product') . '?id=' . $product['id'] ?>">Verified</a>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    
                        <?php else : ?>
                            <?php if ($product['verified'] == 0) : ?>
                                <p class="text-red-600 font-bold">Not Verified</p>
                            <?php else : ?>
                                <p class="text-green-600 font-bold">Verified</p>
                            <?php endif; ?>
                        <?php endif; ?>
                        <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="<?= url_to('delete') . '?id=' . $product['id'] ?>">Delete</a>
                    </div>
                    <div class="flex justify-center items-center">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4" href="<?= url_to("product_details")."?id=".$product['id']?>">
                            Product Details
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- Add more product cards here -->
        </div>
    </div>
</body>

</html>