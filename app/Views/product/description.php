<head><link rel="stylesheet" href="/css/output.css"></head>
<body class="bg-gray-100">
    <?php  if(!$product) : ?>
<div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold mb-4">Product Not Found</h2>
        <p class="text-gray-600">Sorry, the requested product could not be found.</p>
        <a href="<?= url_to('home');?>" class="text-blue-500 hover:text-blue-700">Go back to homepage</a>
    </div>
    <?php else : ?>
        <div class="container mx-auto p-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div>
        <img src="/uploads/<?=$product['image']?>" alt="Product Image" class="w-full h-auto">
      </div>
      <div>
        <h1 class="text-6xl font-bold mb-4"><?= $product['name'] ?></h1>
        <p class="text-gray-700 text-lg mb-4">Uploaded by <?= $username ?></p>
        <p class="text-gray-700 text-xl mb-4"><?= $product['description'] ?></p>
        <p class="text-2xl font-bold mb-4">Rp<?= number_format($product['price'], 0, ',', '.') ?></p>
      </div>
    </div>
  </div>
    <?php endif; ?>
</body>