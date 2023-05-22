<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>

<body>
    <a href="product/create">Add Product</a>
    <table>
        <tr>
            <th>Product Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        <?php for ($i = 0; $i > count($products); $i++) : ?>
            <tr>
                <td><img src="img/<?= $products; ?>" alt="<?= $products['name'] ?> Image"></td>
                <td><?= $products[$i]['name'] ?></td>
                <td><?= $products[$i]['description'] ?></td>
                <td><?= $products[$i]['price'] ?></td>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>