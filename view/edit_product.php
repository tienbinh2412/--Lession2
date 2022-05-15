<?php
require_once('../model/dphelper.php');
require_once('../controller/edit.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/edit.css">
</head>
<body>

<form method="POST" enctype="multipart/form-data">
    <div class="container">
        <h1>Edit Product</h1>
        <hr>
        <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "select * from product where id = '$id'";
            $result = executeResult($sql);
            if(count($result)>0 && $result !=null){
                echo'
                    <label for="product_name"><b>Tên sản phẩm</b></label>
                    <input type="text" placeholder="Nhập Tên sản phẩm" name="product_name" id="product_name" value="'.$result[0]['product_name'].'" required>
            
                    <label for="category"><b>Danh mục</b></label>
                    <select class="option" name="category">
                        <option value="IP">IP</option>
                        <option value="SS">SS</option>
                        <option value="OP">OP</option>
                    </select>
                    
                    <label for="image"><b>Hình ảnh</b></label>
                    <input type="file" name="imagefile"/>
            
                    <button type="submit" class="registerbtn" name="edit">Edit</button>
                ';
            }
            else{
                header("location: product.php");
                die();
            }
        }
        else{
            header("location: product.php");
            die();
        }
        ?>
    
    </div>

</form>

</body>
</html>