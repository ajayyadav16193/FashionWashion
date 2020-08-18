<?php
    require 'imp.inc.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = get_safe_value($conn,$_POST['cat_upid']);
        $name = get_safe_value($conn,$_POST['cat_upname']);

        $res = mysqli_query($conn,"SELECT * FROM product WHERE categories = '$name'");

        if(mysqli_num_rows($res) > 0){
            echo json_encode(array('msg'=>'Category allready exists.','status'=>'True'));
        }else{            
            $sql = "UPDATE categories SET categories = '{$name}' WHERE id = '{$id}'" ;
    
            $result = mysqli_query($conn,$sql);
    
            if( $result > 0){
                echo json_encode(array('msg'=>'Category successfully updated.','status'=>'True'));
            }else{
                echo json_encode(array('msg'=>'Category not updated.','status'=>'False'));
            }
        }

    }else{
        echo json_encode("Data not correct");
    }
?>