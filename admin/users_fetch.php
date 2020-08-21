<?php
    require_once 'imp.inc.php';

    $sql = "SELECT * FROM users ORDER BY id DESC";
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