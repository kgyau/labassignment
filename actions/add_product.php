<?php
//making actuioin aware fof controller
include("../controllers/product_controller.php");

// collecting form data
if(isset($_POST['submitprod'])){
    // for image 

    $pic= "../images/product".basename($_FILES['prodimage']['name']);

    if($pic){
        echo "sucess";
    }else{
        "fail";
    }

    var_dump($pic);
 // I AM INTERESTED INN THE TWO OTHE RITEMS AND PUTTIGN THEM IN A VARIABLE
    $prodtitle =$_POST['prodtitle'];   
    $prodbrand =$_POST['prodbrand'];
    $prodcat =$_POST['prodcat'];
    $prodprice =$_POST['prodprice'];
    $proddesc =$_POST['proddesc'];
    $prodkeywords=$_POST['prodkeywords'];
    $prodimage = $_FILES['prodimage']['name'];
    

//    echo $prodcat,$prodtitle,$prodprice,$prodbrand,$proddesc,$prodimage,$prodkeywords; 


  $result = addproduct_ctr($prodcat,$prodtitle,$prodprice,$prodbrand,$proddesc,$prodimage,$prodkeywords);

    if ($result) {

        if (move_uploaded_file($_FILES['prodimage']['tmp_name'], $pic)) {
            echo "success";
    
        }else {
            echo "fail";
        }
        header("location:../admin/product.php");

    } else{
        echo 'Picture insertion failed';
    }
}

?>