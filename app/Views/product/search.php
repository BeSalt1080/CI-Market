<head>
  <link rel="stylesheet" href="/uploads/output.css">
</head>

<body class="bg-gray-100">
  <div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Showing Results For "<?= $_GET['q'] ?>"</h2>
    <!-- Display search results -->
    <div class="mt-8">
      <?php if (empty($products)) : ?>
        <p>No results found.</p>
      <?php else : ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <?php foreach ($products as $product) : ?>

          <div class="bg-white shadow-md rounded-lg p-4">
            <div class="h-60 overflow-hidden mb-4">
              <img src="/uploads/<?= $product['image']; ?>" alt="<?= $product['name'] ?> Image" class="mb-4 ">
            </div>
            <h3 class="text-lg font-bold"><?= $product['name'] ?></h3>
            <p class="font-bold text-gray-600 mb-4">Rp<?= number_format($product['price'], 0, ',', '.') ?></p>
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4" href="<?= url_to("product_details") . "?id=" . $product['id'] ?>">
              Product Details
            </a>
          </div>
          <?php endforeach;
      endif; ?>
      </div>
    </div>
  </div>
</body>