<?php

    require_once 'imp.inc.php';

    $sql = "SELECT * FROM categories ORDER BY id DESC";
    $result = mysqli_query($conn,$sql);

    $rows = [];
    $output = '';
    $sno = '';

    if( mysqli_num_rows($result) > 0){
        $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
        // foreach ($rows as $singlerow) {
        //     $output.=
        //             `<tr>
        //                 <td>++$sno</td>
        //                 <td>$singlerow[id]</td>
        //                 <td>$singlerow[categories]</td>
        //                 if($singlerow[status] == 1){
        //                     <td><button class="btn btn-success" onclick='cat_status($singlerow[id],$singlerow[status])'>Active</button></td>
        //                 }else{
        //                     <td><button class="btn btn-danger" onclick='cat_status($singlerow[id],$singlerow[status])'>Deactive</button></td>
        //                 }
        //                 <td><button class="btn btn-primary" onclick='cat_edit("$singlerow[id]")'>Edit</button></td>
        //                 <td><button class="btn btn-danger" onclick='cat_delete("$singlerow[id]")'>Delete</button></td>  
        //             </tr>`;
            echo json_encode($rows);
        // }
    }else{
        $msg = "No Record found";
        echo json_encode($msg);
    }
?>