<?php
// step one create awareness or do it in the view page put it in the form
// require('../controllers/product_controller.php');
// require('../functions/function.php');
// selectallBrand_ctr

//function for category 
function get_all_cat_fxn(){
    //call the econtroller 
$all_cat= selectallcat_ctr();

if($all_cat){
    // loop through reciords one at a time
    foreach($all_cat as $acat){
        //get each record
        $catid= $acat['cat_id'];
        $catname =$acat['cat_name'];

        echo "<option value='$catid'>$catname</option>";

    }

}
    //display records 

}

//in the select <?php get_all_cat_fxn();




// function for brand 


?>