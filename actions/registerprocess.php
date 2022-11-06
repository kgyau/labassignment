<?php

//making action aware of controller
require("../controllers/customer_controller.php");

// collecting form data
if(isset($_POST['submit'])){
    // I AM INTERESTED IN THE TWO OTHER ITEMS AND PUTTIGN THEM IN A VARIABLE
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $country= $_POST['country'];
    $city = $_POST['city'];
    $contactnumber = $_POST['contactnumber'];
    $userrole = 1;
    $image=NULL;
    // echo $fullname,$email,$password,$country, $city ,$contactnumber,$userrole;

    $result = addCustomer_ctr($fullname,$email,$password,$country,$city,$contactnumber,$userrole,$image);

    if ($result) {
        header('location: ../login/loginform.php');
    } else {
        echo 'error';
    }
}

?>

