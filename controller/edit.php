<?php
if(isset($_POST['edit'])){
    $id = $_GET['id'];
    if(isset($_POST['product_name'])){
        $product_name = $_POST['product_name'];
    }
    if(isset($_POST['category'])){
        $category = $_POST['category'];
       
    }
    if(count($_FILES)>0){
        $imagefile = $_FILES['imagefile']['tmp_name'];
        $data = addslashes(file_get_contents($imagefile));
    }
    if($product_name!= null && $category !=null && $data !=null){
        $sql = "update product set product_name = '".$product_name."', category = '".$category."',image = '$data' where id = '$id'";
        execute($sql);
        header("location: ../index.php");
    }
}