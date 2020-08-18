<?php

    require_once 'imp.inc.php';

    if($_SERVER["REQUEST_METHOD"] = 'post'){
        if(isset($_POST['cat_name']) && !empty($_POST['cat_name'])){
            $name = get_safe_value($conn,$_POST['cat_name']);
            
            $sql = "INSERT INTO categories (categories) VALUES ('$name')";
            
            $result = mysqli_query($conn,$sql);

            if( $result > 0){
                $msg = "Category inserted successfully";
                echo json_encode($msg);
            }else{
                $msg = "Category not inserted";
                echo json_encode($msg);
            }    
        }else{
            $msg = "Data not received";
            echo json_encode($msg);    
        }
    }else{
        $msg = "Entered the credentials";
        echo json_encode($msg);
    }

?>