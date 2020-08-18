<?php 
    require_once 'imp.inc.php';

    if(isset($_POST['id']) && !empty($_POST['id'])){
       
      $id = get_safe_value($conn,$_POST['id']);
      
      $sql = "DELETE FROM contact_us WHERE id = '{$id}'";

      $result = mysqli_query($conn,$sql);
      
      if( $result > 0 ){
          echo json_encode("Record deleted Successfully");
      }else{
          echo json_encode("No record deleted");
      }
    }else{
        echo json_encode("Data not correct");
    }
?>