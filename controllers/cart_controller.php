<?php
include("../classes/cart_class.php");


    function addtocart_ctr($p_id,$ip_add,$c_id,$qty){
        //create an instance of the class means that in this fucntion now i can run all the cls methods in the contact_class file
        // instance is add_item then new and the naem of the class in the contact_class file 
        $add_item= new Cart();
        return $add_item->addtocart_cls($p_id,$ip_add,$c_id,$qty);
    }

   
    function viewcart_ctr($c_id){
        $view= new Cart();
        return $view->viewcart_cls($c_id);
    }
    function cartqty_ctr(){
        $qty= new Cart();
        return $qty->cartqty_cls();
    }

    function removefromcart_ctr($p_id,$c_id){
        $remove= new Cart();
        return $remove->removefromcart_cls($p_id,$c_id);
    }

    function  duplicatecheck_ctr($p_id,$c_id){
        $duplicate= new Cart();
        return $duplicate->duplicatecheck_cls($p_id,$c_id);
    }

    function select_onefromcart_ctr($p_id,$c_id){
        $selectone= new Cart();
        return $selectone->select_onefromcart_cls($p_id,$c_id);


    }

    function inc_itemcart_ctr($p_id,$c_id,$qty){
        $inc= new Cart();
        return $inc->inc_itemcart_cls($p_id,$c_id,$qty);


    }

    function dec_itemcart_ctr($p_id,$c_id,$qty){
        $dec= new Cart();
        return $dec->inc_itemcart_cls($p_id,$c_id,$qty);

    }




?>
