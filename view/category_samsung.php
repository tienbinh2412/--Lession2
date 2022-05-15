<?php
require_once('../model/dphelper.php');
require_once('../controller/add.php');
if(strpos($_SERVER['SCRIPT_NAME'],'index.php') == true){
    $active = 'index';
}
else{
    $active = 'category';
}
//phan trang
$sql="select count(id) as number from product where category = 'SS' ";
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
  $sql_list = 'select * from product where product_name like "%'.$_GET['s'].'%" and category = "SS" ';
}
else{
  $sql_list = "select * from product where category = 'SS'  limit $index , 10 ";
}
$list_item=executeResult($sql_list);

?>
<?php
include_once('layout/category.php');
?>