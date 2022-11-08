<?php

include("../controllers/product_controller.php");
  if(isset($_POST['searchb'])) {
    $text= $_POST['searchtext'];
    $searchitem=searchprod_ctr($text);
  }

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/product_search.css" rel="stylesheet">
    <link href="../css/bootsrap.min.css" rel="stylesheet">


    <title>Search Products Results</title>
</head>

<body>

    <form method="POST">
        <label>Search:</label><br>
        <input type="text" id="" name="searchtext" value=""><br>
        <input type="submit" name="searchb" value="Submit">
    </form>



    <h4>Search results</h4>


    <span class="counter pull-right"></span>
    <table class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th class="col-md-5 col-xs-5">Title</th>
                <th class="col-md-4 col-xs-4">Price</th>
                <th class="col-md-3 col-xs-3">Description</th>
            </tr>
        </thead>

        <tbody>
            <?php
            
            $searchitem=searchprod_ctr($text);
            foreach ((array) $searchitem as $aproduct) {
            $product_title = $aproduct['product_title'];
            $product_price = $aproduct['product_price'];
            $product_desc = $aproduct['product_desc'];
            
            echo "
            <tr>
            <td>$product_title</td> 
            <td>$product_price</td>
            <td>$product_desc</td>"; }
          ?>
        </tbody>
    </table>
</body>

</html>