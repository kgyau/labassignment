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

    <title>Single product</title>

    <!-- Removing the / brings the css -->
    <!-- Bootstrap core CSS -->
    <link href="../css/bootsrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/product.css" rel="stylesheet">

</head>



<title>View Product</title>
</head>

<body>
    <br>
    <div id="flex-container">
        <div style='margin: auto; min-height: 400px; min-width: 1350px; text-align: center;'>
            <h5 style="text-align: 50px;"><?php echo $product_title; ?> </h5>
            <div class='row row-cols-1 row-cols-md-2 g-4' style='margin-top: 50px; margin-left: 450px;'>
                <div class='col' style='height: 1000px; '>
                    <div class='card'>
                        <img src='../images/<?php echo $product_image; ?>' class='card-img-top' style='height: 500px; '>
                        <div class='card-body' style='font-size:20px; text-align: center;'>
                            Name: <?php echo $product_title; ?> <br>
                            Price: GHS <?php echo $product_price; ?><br>
                            Category: <?php echo $cname['cat_name']; ?> <br>
                            Brand: <?php echo $bname['brand_name']; ?> <br>
                            Description: <?php echo $product_desc; ?> <br>
                            Keywords: <?php echo $product_keywords; ?> <br>
                            <br>
                            <a href='' class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>