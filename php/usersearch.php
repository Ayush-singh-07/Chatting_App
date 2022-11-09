<?php

include_once "config.php";
session_start();

$user = $_POST['search_val'];
$outgoing_id = $_SESSION['unique_id'];
$sql = mysqli_query($conn, " SELECT * FROM users WHERE not unique_id='{$outgoing_id}' and (f_name LIKE '%{$user}%' or l_name = '%{$user}%'); ");

$response = "";
if(mysqli_num_rows($sql) > 0){
    while($row = mysqli_fetch_assoc($sql)){



        if($row['status'] == 'offline now'){
            $offline = 'offline';
        }
        else{
            $offline = '';
        }
        $response .=  '   <div class="users-list">
                                <a href="chat.php?user_id='.$row['unique_id'].'">
                                <div class="content">
                                <img src="php/pictures/'.$row['picture'] .'" alt="">
                                <div class="details">
                                    <span>'.$row["f_name"]." ".$row["l_name"].'</span>
                                    <p>'.$row["status"].'</p>
                                </div>
                                </div>
                                <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                            </a>';
                    }
    }
else{
    $response =" No Such User ";
}






echo "$response";



?>