<head>
  <link rel="stylesheet" href="/css/output.css">
</head>
<header class="bg-gray-900">
  <nav class="flex items-center justify-between max-w-6xl mx-auto py-4 px-6">
    <div class="flex items-center">
      <a class="text-white text-lg font-bold" href="<?= url_to("home")?>">Marketplace</a>
    </div>
    <div class="flex items-center">
      <form class="mr-4 mb-0" action="<?= url_to('serach')?>" method="get">
        <input class="bg-gray-200 rounded-full py-2 px-4" type="text" name="q" placeholder="Search...">
        <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full ml-2" type="submit">Search</button>
      </form>
      <?php
      if (auth()->user()) {
        if(auth()->user()->can("admin.access")) echo '<a class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-full mr-4" href="' . url_to("admin_page") . '">Admin Page</a>';
        echo '<a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-4" href="' . url_to("product_view") . '">My Products</a>';
        echo '<a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-4" href="' . url_to("product_create_view") . '">Add Product</a>';
        echo '<span class="text-blue-200 text-sm mr-4">'.auth()->user()->jsonSerialize()['username'].'</span>';
        echo '<a class="text-white text-sm mr-4" href="' . url_to("logout") . '">logout</a>';
      } else {
        echo '<a class="text-white text-sm mr-4" href="' . url_to("login") . '">Login</a>';
        echo '<a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" href="' . url_to("register") . '">Register</a>';
      }
      ?>
    </div>
  </nav>
</header>