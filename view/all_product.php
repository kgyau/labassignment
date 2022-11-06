<?php
require('../controllers/product_controller.php');
?>
<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="Kwame Ofori-Gyau" content="WebTecher">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title>All products</title>

    <!-- Removing the / brings the css -->
    <!-- Bootstrap core CSS -->
    <link href="../css/bootsrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/product.css" rel="stylesheet">

</head>


<body>

    <h4>All Products</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Product Title</th>
                <th>Product Brand</th>
                <th>Product Category</th>
                <th>Product Price</th>
                <th>Product Description</th>
                <th>Product Keyword</th>
                <th>Product image</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $product = viewallprod_ctr();
                foreach ((array) $product as $aproduct) {
                    
                    $product_title = $aproduct['product_title'];
                    $pcat = $aproduct['product_cat'];
                    $pbrand = $aproduct['product_brand'];
                    $pprice = $aproduct['product_price'];
                    $pdesc = $aproduct['product_desc'];
                    $pkey = $aproduct['product_keywords'];
                    $product_image = $aproduct['product_image'];
                    
                    echo"
                    <tr>
                    <td>$product_title</td>
                    <td>$pcat</td>
                    <td>$pbrand</td>
                    <td>$pprice</td>
                    <td>$pdesc</td>
                    <td>$pkey</td>
                    <td>$product_image</td>
                    ";
                }
                ?>
        </tbody>
    </table>

</body>

</html>