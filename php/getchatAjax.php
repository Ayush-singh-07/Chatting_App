<?php

include_once "config.php";
session_start();
if(isset($_SESSION['unique_id'])){
    $outgoing_id = $_POST['outgoing_id'];
    $incoming_id = $_POST['incoming_id'];
    $response = '';
    $sql = mysqli_query($conn, "SELECT * from chats  left join users on users.unique_id = chats.outgoing_msg_id  where (outgoing_msg_id='{$outgoing_id}' and incoming_msg_id ='{$incoming_id}' ) or (outgoing_msg_id = '{$incoming_id}' and incoming_msg_id ='{$outgoing_id}') order by msg_id ;");

    if(mysqli_num_rows($sql)>0){
        while($row = mysqli_fetch_assoc($sql)){
            if($row['outgoing_msg_id'] === $outgoing_id){
                $response .='                    <div class="chat outgoing">
                                                    <div class="details">
                                                        <p> '.$row['message'].' </p>
                                                    </div>
                                                </div>';
            }
            else{
                $response .= '                    <div class="chat incoming">
                                                    <img src="php/pictures/'.$row['picture'].'" alt="">
                                                    <div class="details">
                                                    <p> '.$row['message'].' </p>
                                                    </div>
                                                </div>';
            }
        }
        
    echo "$response";
    }


}
else{

    header('location: ../login.php ');
}










?>