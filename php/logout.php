<?php
session_start();

if(isset($_SESSION['unique_id'])){
    include_once "config.php";

    $logout_id = $_GET['logout_id'];
    $sql =  mysqli_query($conn, "update  users set status = 'Offline now' where unique_id = '{$logout_id}' ");  
   

    if(isset($sql)){
        session_unset();
        session_destroy();
        header("location: ../login.php");
    }
    else{
        header("location: ../users.php");
    }


}

else{
    header("location: ../login.php");

}
?>