<?php  

    require_once 'imp.inc.php';

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        echo json_encode("Query can not be submitted");
    } else {
        if (isset($_POST['name']) && !empty($_POST['name'])) {
            $name = get_safe_value($conn,$_POST['name']);
            $email = get_safe_value($conn,$_POST['email']);
            $mobile = get_safe_value($conn,$_POST['mobile']);
            $comment = get_safe_value($conn,$_POST['message']);
            $added_on = date('Y-m-d h:i:s');
            
            $sql = "INSERT INTO contact_us (name,email,mobile,comment,added_on) VALUES ('$name','$email','$mobile','$comment','$added_on')";
            $result = mysqli_query($conn,$sql);
                        
            if ($result == 1) {
                echo json_encode("True");
            } else {
                echo json_encode("False");
            }
        } else {
            echo json_encode("Please enter all details");
        }
    }

?>