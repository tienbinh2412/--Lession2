<?php
$product_name = $category =  $imagefile = "";
if(isset($_POST['submit'])){
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
    $sql ="insert into product(product_name, category, image) values('".$product_name."','".$category."','$data')";
    execute($sql);
    if(strpos($_SERVER['SCRIPT_NAME'],'index.php') == true){
        header("location: index.php");
    }
    else{
        header("location: ../index.php");
    }
    
}