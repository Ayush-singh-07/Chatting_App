<?php

$conn = mysqli_connect('localhost' , 'root' , '', 'chatapp');
    if(!$conn){
        echo "Error in connection to DB ";
    }
    // else{
    //     echo "DB Connected";
    // }

?>