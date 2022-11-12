<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="WebTecher">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title>My labs </title>

    <!-- Removing the / brings the css -->
    <!-- Bootstrap core CSS -->
    <link href="css/bootsrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/index.css" rel="stylesheet">

</head>


<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">

            <div>
                <h3 class="float-md-start mb-0">Ecommerce Labs</h3>
                <?php
                    session_start();
                    if(isset($_SESSION['cid'])){
                ?>
                <a class="btn btn-success" style="align-self: right;" href="login/logout.php">Logout</a>
                <?php
                    }
                ?>
            </div>
            <!-- -->
        </header>




        <main class="px-3">
            <?php
            if(!empty($_SESSION['name'])){
              
                
                echo $_SESSION['name']; 
            }
                ?>
            <br>
            <br>

            <?php 
            if(empty($_SESSION['cid'])){
                ?>
            <br>
            <p class="lead">Welcome to my lab</p>
            <a class="btn btn-success" style="text-align: center" href="login/registerform.php">Register</a>
            <a class="btn btn-success" style="text-align: center" href="login/loginform.php">Login </a>
            <br>
            <br>

            <!-- <p class="lead">Buttons for access</p> -->




            <?php
            }
            ?>

            <!-- Check if logged in user is admin with role =1 and seesion id initiated -->
            <?php
             if(isset($_SESSION['cid']) && $_SESSION['role']=="1"){
            ?>
            <p class="lead">Welcome to my lab</p>
            <a class="btn btn-success" style="align-self: right;" href="admin/Brand.php">Brand</a>
            <a class="btn btn-success" style="align-self: right;" href="admin/Category.php">Category</a>
            <a class="btn btn-success" style="align-self: right;" href="admin/product.php">Add Product</a>
            <a class="btn btn-success" style="text-align: center" href="view/all_product.php">View products</a>
            <a class="btn btn-success" style="text-align: center" href="view/product_search_result.php">Search for products</a>
            <a class="btn btn-success" style="text-align: center" href="view/cart.php">Cart</a>



           <?php
             } 
            ?>
             <!-- Check if logged in user is admin with role =1 and seesion id initiated -->
             <?php
             if(isset($_SESSION['cid']) && $_SESSION['role']=="2"){
            ?>
               <p class="lead">Welcome to my lab</p>
            <a class="btn btn-success" style="text-align: center" href="view/all_product.php">View products</a>
            <a class="btn btn-success" style="text-align: center" href="view/product_search_result.php">Search for products</a>
            <!-- <a class="btn btn-success" style="text-align: center" href="view/single_product.php"></a> -->


            

           <?php
             } 
            ?>
        </main>

        <footer class="mt-auto text-white-50">
            <p>for <a href="https://www.ashesi.edu.gh/" target="_blank" class="text-white">Ashesi University's</a>
                Ecommerce, by <a href="linked in" class="text-white">Kwame Gyau</a>.</p>
        </footer>
    </div>


</body>

</html>