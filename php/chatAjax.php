<?php
include_once "config.php";
session_start();
if(isset($_SESSION['unique_id'])){


    $message = $_POST['message'];
    $outgoing_id= $_POST['outgoing_id'];
    $incoming_id = $_POST['incoming_id'];

    if(!empty($message)){
        $sql= mysqli_query($conn , "insert into chats (outgoing_msg_id , incoming_msg_id, message ) values  ('{$outgoing_id}', '{$incoming_id}' , '{$message}')") or die();
        
    }


}
else{

    header('location: ../login.php');
}

?>