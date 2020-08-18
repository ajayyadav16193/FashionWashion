<?php

    require_once 'imp.inc.php';

    $sql = "SELECT product.*,categories.categories FROM product,categories WHERE product.categories_id = categories.id ORDER BY id DESC";
    $result = mysqli_query($conn,$sql);

    $rows = [];

    if( mysqli_num_rows($result) > 0){
        $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
        echo json_encode($rows);
    }else{
        $msg = "No Record found";
        echo json_encode($msg);
    }
?>