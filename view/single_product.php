<?php
require('../controllers/product_controller.php');
$product_id =$_GET['product_id'];
$prod=viewoneprod_ctr($product_id);
$brand = selectonebrand_ctr($prod['product_brand']);
$cat = selectonecat_ctr($prod['product_cat']);


?>



<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Kwame Ofori-Gyau" content="WebTecher">
    <title>Single product</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootsrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/product.css" rel="stylesheet">

</head>




<title>View Product</title>
</head>

<body>
    <div class="container d-flex justify-content-center">

        <figure class="card card-product-grid card-lg"> <figcaption class="info-wrap">
       

        <div class="col-md-3">
                    <img src="<?php echo $prod['product_image']?>" alt="Generic placeholder image"
                        style='height: 400px ; '>
                </div>
            
                <div class="row">
                    <div class="col-md-9 col-xs-9"> Name: <?php echo $prod['product_title']; ?></div>
                </div>
            </figcaption>
            <div class="bottom-wrap-payment">
                <figcaption class="info-wrap">
                    <div class="row">
                    <div class="col-md-9 col-xs-9"> Price: <?php echo $prod['product_price']; ?> </div>
                </figcaption>
            </div>
            <figcaption class="info-wrap">
                    <div class="row">
                    <div class="col-md-9 col-xs-9"> Description: <?php echo $prod['product_desc']; ?> </div>
                </figcaption>
         <?php
                            echo" 
                            <div class='bottom-wrap'> <a href='../actions/add_to_cart.php?product_id={$prod["product_id"]}' class='btn btn-primary float-right' > Add to cart </a>
                          "?>
                <div class="price-wrap"> <a href="../view/all_product.php" class="btn btn-warning float-left" > Cancel </a>
                </div>
            </div>
        </figure>
    </div>

    
    <br>

</body>

</html>
