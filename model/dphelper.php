<?php
require_once('config.php');
//them xoa sua
function execute($sql){
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn , 'utf8');

    mysqli_query($conn,$sql);

    mysqli_close($conn);
}

function executeResult($sql){
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn , 'utf8');

    $resultSet = mysqli_query($conn,$sql);
    $data = [];

    while(($row = mysqli_fetch_array($resultSet , 1)) != null){
        $data[] = $row;
    }
    
    mysqli_close($conn);
    return $data;
}