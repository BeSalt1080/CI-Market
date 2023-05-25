<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <form action="product/create" enctype="multipart/form-data">
        <label for="name">Product Name: </label>
        <input type="text" name="name" id="name">
        <label for="description">Product Description: </label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        <label>Product Image: </label>
        <input type="file" name="image">
        <label for="price">Product Price: </label>
        <input type="text" name="price" id="price">
        <input type="hidden" name="id_user">
        <input type="submit" value="submit">
    </form>
</body>
</html>