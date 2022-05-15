<?php
require_once('model/dphelper.php');
require_once('controller/add.php');
if(strpos($_SERVER['SCRIPT_NAME'],'index.php') == true){
    $active = 'index';
}
else{
    $active = 'category';
}
//phan trang
$sql="select count(id) as number from product ";
$result = executeResult($sql);

$number=0;
if($result != null && count($result) >0){
  $number = $result[0]['number'];
}
$pages = ceil($number/10);
$current_page = 1;
$index = 0;
if(isset($_GET['pages'])){
  $current_page = $_GET['pages'];
}
$index = ($current_page-1)*10;

if(isset($_GET['s']) && $_GET['s']!=''){
  $sql_list = 'select * from product where product_name like "%'.$_GET['s'].'%"';
}
else{
  $sql_list = "select * from product limit $index , 10 ";
}
$list_item=executeResult($sql_list);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="view/css/index.css">
</head>
<body>

<div class="container">
    <div>
        <h2>Product Management</h2>
        <div class="dropdown">
        <a href="index.php"><button type="button" class="btn btn-link <?php if($active=="index"){?>active<?php } ?>">Products</button></a>
            <button type="button" class="dropdown-toggle btn btn-link <?php if($active=="category"){?>active<?php } ?>" data-toggle="dropdown">Categories</button>
            <ul class="dropdown-menu">
                <li><a href="view/category_iphone.php">Iphone</a></li>
                <li><a href="view/category_samsung.php">Samsung</a></li>
                <li><a href="view/category_oppo.php">Oppo</a></li>
            </ul>
        </div>
        <form method="get">
          <input type="text" name="s" class="form-control" placeholder="Search by product name">
        </form>
        <button type="button" class="btn btn-info add" data-toggle="modal" data-target="#myModal">Add product</button>
    </div>
  
             
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Mã</th>
        <th>Tên sản phẩm</th>
        <th>Danh mục</th>
        <th>Hình ảnh</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php
        foreach($list_item as $item){
            echo'
                <tr>
                    <td>'.$item['id'].'</td>
                    <td><a href="view/detail_product.php?id='.$item['id'].'">'.$item['product_name'].'</a></td>
                    <td>'.$item['category'].'</td>
                    <td><img class="img_product" src="data:image/jpeg;base64,'.base64_encode($item['image']).'" alt=""></td>
                    <td>
                    <a href="view/edit_product.php?id='.$item['id'].'"><button type="button" class="btn  btn-success">Edit</button></a>
                    <td>
                </tr>
            ';
        }
    ?>
    </tbody>
  </table>
  

  <?php
  include_once('view/layout/pagination.php');
  include_once('view/add_product.php');
  ?>
  
</div>

</body>
</html>