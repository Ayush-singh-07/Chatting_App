<?php


require_once "config.php";

session_start();
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$psw = $_POST['password'];



if(!empty($fname) && !empty($lname) && !empty($email) && !empty($psw) ){

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $sql = mysqli_query($conn, "select * from users where email ='{$email}' ");
        $numrows = mysqli_num_rows($sql);
        if($numrows > 0){
            echo  " $email Alreay Exists ";
        }
        else{
            if(isset($_FILES['image'])){
                $img_name=$_FILES['image']['name'];   //upload image name
                $img_type=$_FILES['image']['type'];   //upload image type
                $tmp_name=$_FILES['image']['tmp_name'];   //save

                $exploded = explode('.', $img_name);
                $extension = end($exploded);
                 
                $allowed_exts = ['png', 'jpeg', 'jpg'];
                if(in_array($extension , $allowed_exts) === true){
                    $time = time();
                    $new_img_name = $time.$img_name;
                    if(move_uploaded_file($tmp_name, 'pictures/'.$new_img_name)){
                        $status = "Active Now";
                        $random = rand(time(), 100000);

                        $sql2 = mysqli_query($conn , "insert into users(unique_id,f_name, l_name, email, password, picture , status) values({$random} ,  '{$fname}' , '{$lname}' , '{$email}' , '{$psw}' , '{$new_img_name}'  ,'{$status}') ");

                         if($sql2){
                        //    echo "data submitted !";
                            $sql3 = mysqli_query($conn, "select * from users where email = '{$email}'  ");
                            if(mysqli_num_rows($sql3) > 0){
                                $rows = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $rows['unique_id'];
                                echo "success";
                            }else{
                                echo "not a success";
                            }
                         }
                         else{
                            echo "Something Went Wrong ! ";
                         }
                    }
                }
                else{
                    echo "please select an image of format type png, jpeg or jpg ";
                }

            }
            else{
                echo "image is empty";
            }
        }
    }
    else{
        echo "$email is not valid";
    }

}else{
    echo "please fill all fields. ";

}

?>