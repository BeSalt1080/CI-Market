<title>Admin Dashboard</title>
<body class="bg-gray-200">
    <div class="container mx-auto p-4 mt-72">
        <h1 class="text-2xl font-bold mb-4 flex justify-center">Admin Dashboard</h1>
        
        <div class="flex justify-center">
            <div class="m-4">
                <a href="<?= url_to('admin_view_user')?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Manage Users
                </a>
            </div>
            
            <div class="m-4">
                <a href="<?= url_to('admin_view_product')?>" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Manage Products
                </a>
            </div>
        </div>
    </div>
</body>