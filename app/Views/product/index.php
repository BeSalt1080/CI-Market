<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>

<body>
    <?php 
        if($authorized) echo '<a href="product/create">Add Product</a>';
    ?>
    <table border>
        <tr>
            <th>Product Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        <?php foreach($products as $product) : ?>
            <tr>
                <td><img src="img/<?= $product['image']; ?>" alt="<?= $product['name'] ?> Image"></td>
                <td><?= $product['name'] ?></td>
                <td><?= $product['description'] ?></td>
                <td><?= $product['price'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>