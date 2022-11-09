<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" href="Images/message.png" type="image/icon type">
    <link rel="stylesheet" href="css/login.css">
    <title>Chat Application</title>
</head>

<body>

    
<section class="vh-100 form signup" style="background-color: #eee;">        
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign In</p>
                <div class="errormsg">   

                </div>
                  <form class="mx-1 mx-md-4">

  

  

                    <div class="input-group mb-3">
  <span class="input-group-text"><i class="fas fa-envelope fa-lg me-3 fa-fw"></i></span>
  <input type="email" id="form3Example3c" name="email" placeholder="Your Email" class="form-control" required/>

</div>




                    <div class="input-group mb-3">
  <span class="input-group-text"><i class="fa fa-lock"></i></span>
  <input type="password" id="form3Example4c" name="psw"  placeholder="Password" class="form-control" required />
  <span class="input-group-text">
    <i class="fa fa-eye" id="togglePassword" 
   style="cursor: pointer"></i>
   </span>
</div>
        




                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="button" class="btn btn-dark btn-lg">Log In</button>
                    </div>
  
                  </form>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <label class="form-label" for="form3Example4cd">Not Signed Up ? </label>&nbsp&nbsp
                    <a href="index.php" class="link-success"> Sign Up </a>
                </div>


                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
  
                  <img src="Images/ChatPic.jpg"
                    class="img-fluid" alt="Sample image">
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
<script src="javascript/credshowhide.js"></script>
<script src="javascript/login.js"></script>
</body>
</html>