<?php

    function pr($arr){
      print_r($arr);
      die();
    }

    function prx($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
        die();
    }

    function get_safe_value($conn,$str){
        if($str != ''){
            return mysqli_real_escape_string($conn,$str);
        }
    }

?>