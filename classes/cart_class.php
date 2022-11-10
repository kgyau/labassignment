<?php


require("../settings/db_class.php");

class Cart extends db_connection{

    function addtocart_cls($p_id,$ip_add,$c_id,$qty){
        $sql = "INSERT INTO `cart` (p_id,ip_add,c_id,qty) VALUES ('$p_id','$ip_add','$c_id','$qty')";
		return $this-> db_query($sql);
    }

    function removefromcart_cls($p_id,$c_id){
        $sql="DELETE FROM cart WHERE `p_id`='$p_id' and `c_id`='$c_id'";
		return $this-> db_query($sql);
    }
  
	function viewcart_cls($c_id){
		$sql = "SELECT products.product_id, products.product_title,products.product_price, products.product_image, products.product_price, cart.qty, cart.c_id from cart inner join products on cart.p_id=products.product_id where c_id=$c_id;";
		return $this-> db_fetch_all($sql);
	}


    function cartqty_cls(){

    }

    //check for duplicate
    function duplicatecheck_cls($p_id,$c_id){

        $sql = "SELECT * FROM cart WHERE `p_id`='$p_id'  and `c_id`='$c_id'";
        return $this-> db_fetch_all($sql);
      
        
    }

     // one item  from cart
    function select_onefromcart_cls($p_id,$c_id){
        $query= "SELECT `qty` from `cart` where `p_id`=$p_id and `c_id`=$c_id";
        return $this-> db_fetch_one($query);
    }

	function inc_itemcart_cls($p_id,$c_id,$qty){
		$sql = "UPDATE `cart` SET `qty`='$qty'+1 WHERE `p_id`='$p_id' and `c_id`='$c_id'";
		return $this-> db_query($sql); 
	}

	function dec_itemcart_cls($p_id,$c_id,$qty){
		$sql = "UPDATE `cart` SET `qty`='$qty'-1 WHERE `p_id`='$p_id' and `c_id`='$c_id'";
		return $this-> db_query($sql);
	
    }
}
?>