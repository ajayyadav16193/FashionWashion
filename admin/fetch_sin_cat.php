<?php
    require 'imp.inc.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
        
            $id = get_safe_value($conn,$_GET['id']);
            $sql = "SELECT * FROM categories WHERE id='{$id}'";
            
            $result = mysqli_query($conn,$sql);
        
            if( mysqli_num_rows($result) > 0 ){
                $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
                echo json_encode($row);
            }else{
                echo json_encode("No record found");
            }
        } else {
            echo json_encode("Data not correct");
        }
    }else{
        echo json_encode("Data not correct");
    }
?>