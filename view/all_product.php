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
    <div class="container">

        <?php
            $product = viewallprod_ctr();
            foreach ((array) $product as $aproduct) {
                $product_id = $aproduct['product_id'];
                $product_title = $aproduct['product_title'];
                $product_price = $aproduct['product_price'];
                $product_image = $aproduct['product_image'];
                echo " 
                <div class='card'>
                <img src=' ../images/$product_image' style='width:100%'>
                <br>
                <br>
                <div class='container'>
                Name: $product_title 
                <br>
                <br>
                Price:  GHS $product_price <br> <br> 
                <a href='../actions/cart.php?pid=$product_id' class='btn btn-primary'>Add to Cart</a> <!-- When i add cart page  -->
                <a href='single_product.php?vid=$product_id' class='btn btn-primary'>View</a>
                </div>
                </div>";
            }
        ?>
    </div>


    <!--  -->
</body>

</html>