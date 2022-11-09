


<?php 

session_start();

if(!isset($_SESSION['unique_id'])){
  header("location: login.php");
}

?>


<?php require_once "php/config.php" ?>
<?php include_once "header.php" ?>
<body>


    <div class="mycard"> 
        <div class="card" style="width: 36rem;">
            <div class="card-body">
            <div class="wrapper">
              <section class="users">
                <header>
                <?php

                  $sql =  mysqli_query($conn , "select * from users where unique_id= {$_SESSION['unique_id']} ");
                  if(mysqli_num_rows($sql) > 0){
                    $row = mysqli_fetch_assoc($sql);
                  }
                  else{
                    echo "not a success";
                  }
                  ?>

              <div class="content">
                <img src="php/pictures/<?php echo $row['picture']; ?>" alt="">
                <div class="details">
                    <span> <?php echo  $row['f_name'].' '.$row['l_name']; ?> </span>
                    <p><?php echo $row['status']; ?></p>
                </div>
              </div>
              <a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
                                  
            </header>



            <div class="search">
              <span class="text">Select an user to start chat</span>
              <input type="text" placeholder="Enter name to search...">
              <button><i class="fas fa-search"></i></button>
            </div>
                  <div>
                    
                  <div class="users-list">
                
              
              
                </div>
                  </div>
            </section>
          </div>
            </div>
          </div>
    </div>
<script src="javascript/users.js"></script>
    
</body>
</html>