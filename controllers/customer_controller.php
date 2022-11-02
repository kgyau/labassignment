<?php
//make the controller aware of the existence of the class

require("../classes/customer_class.php");


// eedit select update delectre functions

// you need placeholders itema and b 
function addCustomer_ctr($fullname,$email,$password,$country,$city,$contactnumber,$userrole,$image){
    //create an instance of the class means that in this fucntion now i can run all the cls methods in the contact_class file
    // instance is add_item then new and the naem of the class in the contact_class file 
    $add_item= new CustomerClass();

    return $add_item->addCustomer_cls($fullname,$email,$password,$country,$city,$contactnumber,$userrole,$image); 

    //run the method 

}


    //--SELECT--//
    //login customer
    function select_onecustomer_ctr($email){
        $selectonecustomer = new CustomerClass();
        return $selectonecustomer->customer_login_cls($email);
    }



?>