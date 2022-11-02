<?php
//make the controller aware of the existence of the class

require("../classes/product_class.php");


// eedit select update delectre functions

// you need placeholders itema and b 
function addBrand_ctr($bname){
    //create an instance of the class means that in this fucntion now i can run all the cls methods in the contact_class file
    // instance is add_item then new and the naem of the class in the contact_class file 
    $add_brand= new Brandclass();

    return $add_brand->addBrand_cls($bname); 

    //run the method 

}
    //--SELECT--//
    //login admin
function select_oneadmin_ctr(){
        $selectoneadmin = new BrandClass();
        return $selectoneadmin->admin_login_cls();
}

function editBrand_ctr($bid,$newbname){
    $updateonebrand = new BrandClass();
    return $updateonebrand->editBrand_cls($bid,$newbname);
}

function selectallBrand_ctr(){
    $select_brand = new  BrandClass();
    return $select_brand->selectallBrand_cls();
}

function selectonebrand_ctr($bid){
    $selectonebrand = new BrandClass();
    return $selectonebrand->selectonebrand_cls($bid);
}

function addproductcat_ctr($prodcat){
    $add_prodcat= new Brandclass();
    return $add_prodcat->addproductcat_cls($prodcat); 
}

function selectallcat_ctr(){
    $select_cat = new  BrandClass();
    return $select_cat->selectallcat_cls();
}
function selectonecat_ctr($catid){
    $select_onecat = new Brandclass();
    return $select_onecat->selectonecat_cls($catid);
}

function editcat_ctr($catid,$newcatname){
    $updateonecat = new Brandclass();
    return $updateonecat->editcat_cls($catid,$newcatname);
}

// function editcat_ctr($catid,$newcatname){
//     $updateonecat =new BrandClass();
//     return $updateonecat->editcat_cls();

// }


?>