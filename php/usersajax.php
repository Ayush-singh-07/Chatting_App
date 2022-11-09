<?php

session_start();
require_once "config.php";
$outgoing_id = $_SESSION['unique_id'];
$sql = mysqli_query($conn , "select * from users where not unique_id='{$outgoing_id}'");

$response = "";

if(mysqli_num_rows($sql) == 1){
    $response .= "No User Available To Chat";
}
else if(mysqli_num_rows($sql) > 0){

   while( $row = mysqli_fetch_assoc($sql)){


        
        $newsql = mysqli_query($conn, "select * from chats where (incoming_msg_id = {$row['unique_id']} or outgoing_msg_id = {$row['unique_id']}  ) and (outgoing_msg_id = {$outgoing_id} or incoming_msg_id ={$outgoing_id}) order by msg_id desc limit 1");
        $newrow = mysqli_fetch_assoc($newsql);

        if(mysqli_num_rows($newsql) > 0){
            $result = $newrow['message'];
        }
        else{
            $result ="No message available";
        }

        if(strlen($result) > 28){
            $msg = substr($result, 0 , 25)."...";
        }else{
            $msg =  $result;
        }

        if( !empty($newrow['outgoing_msg_id']) ){
            if($outgoing_id == $newrow['outgoing_msg_id']){
                $you='You: ';
            }
            else{
                $you='';
            }
        }else{
            $you='';
        }

        if($row['status'] == 'Offline now'){
            $offline = 'Offline';
        }
        else{
            $offline = '';
        }

        $response .=  '   <div class="users-list">
                                <a href="chat.php?user_id= '.$row['unique_id'].' ">
                                <div class="content">
                                <img src="php/pictures/'.$row['picture'] .'" alt="">
                                <div class="details">
                                    <span>'.$row["f_name"]." ".$row["l_name"].'</span>
                                    <p>'.$you.$msg.'</p>
                                </div>
                                </div>
                                <div class="status-dot'. $offline .'"><i class="fas fa-circle"></i></div>
                            </a>';
                    }
}
echo $response;
?> 