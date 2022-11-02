<?php  
//contact phone entity 
// i would need to update, add and delete contacts 


require("../settings/db_class.php");

// class name is contactphoneclass which needs the method which are in  db_connection 
class Brandclass extends db_connection{

    function admin_login_cls(){
		$sql = "SELECT * FROM customer WHERE user_role = 1";
		return $this->db_fetch_one($sql);		
	}

    //add edit delelte
    // a and b are just pllaceholders (this means that it needs just two items to be passsed to it which are the name and phone in the database)
    function addBrand_cls($bname){
        $sql = "INSERT INTO `brands` (`brand_name`) VALUES ('$bname')";
        return $this->db_query($sql);
    }
    //select

    function selectallBrand_cls(){
        $sql=  "SELECT * FROM brands";
        return $this-> db_fetch_all($sql); 
    }
   
    function selectonebrand_cls($bid){
        $sql = "SELECT * FROM brands WHERE brand_id='$bid'";
        return $this-> db_fetch_one($sql);

    }

    function editBrand_cls($bid,$newbname){
        $sql ="UPDATE brands SET `brand_name` ='$newbname' WHERE `brand_id` = '$bid'";
        return $this-> db_query($sql);
    }

    function addproductcat_cls($catname){
        $sql ="INSERT INTO `categories` (`cat_name`) VALUES ('$catname')";
        return $this-> db_query($sql);

    }

    function selectallcat_cls(){
        $sql=  "SELECT * FROM categories";
        return $this-> db_fetch_all($sql); 
    }
    
    function selectonecat_cls($catid){
        $sql = "SELECT * FROM categories WHERE cat_id='$catid'";
        return $this-> db_fetch_one($sql);


    }

    function editcat_cls($catid,$newcatname){
        $sql ="UPDATE categories SET `cat_name` ='$newcatname' WHERE `cat_id` = '$catid'";
        return $this-> db_query($sql);

    }

    // function addprodcategory_cls(){
    //     $sql ="";
    //     return $this-> db_query($sql);

    // }


}




?>