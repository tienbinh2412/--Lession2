<?php
require_once('../model/dphelper.php');
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $sql = "select * from product where id = '$id'";
    $product = executeResult($sql);
}
else{
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/detail.css">
</head>
<body>

<div class="container">
    <div class="col-md-5 col-10">
        <img src="<?='data:image/jpeg;base64,'.base64_encode($product[0]['image'])?>">      
    </div>
    <div class="col-md-7 col-10">
        <a href="../index.php">Return home page</a>  
        <p><?=$product[0]['product_name']?></p>
        <h3>Danh mục: <?=$product[0]['category']?></h3>
        <p style="text-align: center;">Máy có thiết kế được bo cong ở các cạnh viền mặt lưng giúp người dùng cầm nắm một cách thoải mái trong một khoảng thời gian lâu dài. Với kích thước được tối ưu khá tốt khi máy có độ mỏng 8.28 mm, mang đến một thiết kế bắt kịp xu hướng thiết kế gọn gàng hiện nay, đem lại cái nhìn sang trọng và đẳng cấp đến với bạn.</p>
    </div>
    
    
</div>

</body>
</html>