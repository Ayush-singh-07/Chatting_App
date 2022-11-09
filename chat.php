<?php include_once "header.php" ?>
<?php include_once "php/config.php"?>

<?php

session_start();
if(!isset($_SESSION['unique_id'])){
    header('location: login.php');
}


?>


    <div class="mycard"> 
        <div class="card" style="width: 36rem;">
            <div class="card-body">

            
            <div class="wrapper">

   
              <section class="chat-area">
                <header>

                    <?php
                    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                    $sql = mysqli_query($conn, "select * from users where unique_id = '{$_SESSION['unique_id']}' ");
                    if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                    }
                    ?>


                    <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="php/pictures/<?php echo $row['picture']; ?>" alt="">
                <div class="details">
                    <span><?php echo $row['f_name']." ".$row['l_name']; ?></span>
                    <p><?php echo $row['status']; ?></p>
                </div>            
            </header>
                <div class="chat-box">

                </div>
                <form class="area">
                <input type="text" hidden name="outgoing_id" value = '<?php echo "".$_SESSION['unique_id']."" ; ?>' placeholder="Type a message here ..." id="">
                <input type="text" hidden name="incoming_id" value = '<?php echo "$user_id"; ?>' placeholder="Type a message here ..." id="">
                    <div class="input-group mb-3">
                <input type="text" class="form-control input-field"  name ="message" placeholder="Type a message here ..."  autocomplete="off">
                <div class="input-group-append">
                    <button class="btn send btn-outline-secondary" type="button"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                </div>
                </div>
                </form>

            </section>
          </div>
            </div>
          </div>
    </div>
    <script src="javascript/chat.js"></script>

</body>
</html>