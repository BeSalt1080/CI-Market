<body class="bg-gray-100">
<div class="flex justify-center items-center h-screen">
    <div class="max-w-md w-full bg-white p-6 rounded-lg shadow-md">
    <?php 
    var_dump(session('validation'));
    if (session('validation')) : ?>
        <p><?= validation_list_errors() ?></p>
    <?php endif; ?>
      <h2 class="text-2xl font-bold mb-6">Update Product</h2>
    <form action="<?= url_to('update')?>" enctype="multipart/form-data" method="post">
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="productName">Product Name</label>
          <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            name="name"id="productName" type="text" value="<?= $product['name']; ?>" required>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="productDescription">Product Description</label>
          <textarea class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            name="description"id="productDescription"  required><?= $product['description']; ?></textarea>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="productImage">Product Image</label>
          <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            name="image" id="productImage" type="file">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="productPrice">Product Price</label>
          <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            name="price"id="productPrice" type="number" value="<?= $product['price']; ?>" required>
        </div>
        <div class="flex justify-end">
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
          <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            type="submit" value="submit">Update Product</button>
        </div>
      </form>
    </div>
  </div>
</body>