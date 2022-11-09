<?php

require_once  "config.php";

session_start();

$email = $_POST['email'];
$psw = $_POST['psw'];

if(!empty($email) && !empty($psw)){
    $sql = mysqli_query($conn, "select * from users where email = '${email}'   and password = '{$psw}' ");
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);

        $status="Active Now";
        $sql2 = mysqli_query($conn, "update users set status = '{$status}' where unique_id={$row['unique_id']} ");
        if($sql2){
            $_SESSION['unique_id'] =    $row['unique_id'];
            
      
        echo "success";

    }
        // $_SESSION['unique_id']=$row['unique_id'];
        // echo "success";
    }
    else{
        echo "Email Or Password Is Incorrect ";
    }
}
else{
    echo "All Fieds Are Mandatory";
}


?>