<?php
    require_once 'imp.inc.php';    
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['cat_id']) && !empty($_POST['cat_id'])) {
            $id = get_safe_value($conn,$_POST['cat_id']);
            $status = get_safe_value($conn,$_POST['cat_status']);
            
            if ($status == 1 ) {
                $status = 0;
                $sql = "UPDATE categories SET status = '$status' WHERE id = '$id' ";
                $result = mysqli_query($conn,$sql);
                
                if ($result == 1) {
                    echo json_encode("Status updated successfully");
                } else {
                    echo json_encode("Status not updated");
                }
            } else {
                $status = 1;
                $sql = "UPDATE categories SET status='$status' WHERE id = '$id' ";
                $result = mysqli_query($conn,$sql);

                if ($result == 1) {
                    echo json_encode("Status updated successfully");
                } else {
                    echo json_encode("Status not updated");
                }
            }
        } else {
            echo json_encode("Data not found");
        }
    } else {
        echo json_encode("Data not found");
    }

?>