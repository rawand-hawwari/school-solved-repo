<?php
   include($_SERVER['DOCUMENT_ROOT'] . '/demo/admin/configration/config.php');
   
   session_start();

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id,password FROM user WHERE username = '$myusername' or email = '$myusername'";
      $result = $db->query($sql);
      $row = $result -> fetch_assoc();
    //   $active = $row['active'];

      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        if(password_verify($mypassword, $row['password'])){
          $_SESSION['username'] = $myusername;

          header("location: admin/adminpage/dashboard.php?Message=successful_log_in");
          
        }
        else{
        $error = "Your Login Name or Password is invalid";
        }

      }else {
        $error = "Your Login Name or Password is invalid";
      }
   }
?>


<html>
  <head>
      <meta charset="UTF-8">
      <title>school solved </title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </head>
  <body class="login-page">
  <!-- Button trigger modal -->

    <?php
    if(isset($error)){
      echo '
      <button type="button" class="btn btn-primary d-none show-error" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>


      <div class="modal fade" id="exampleModal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">ERROR</h5>
            </div>
            <div class="modal-body">
              <p>'.$error.'.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
            </div>
          </div>
        </div>
      </div>
      ';
    }
    ?>

    <div class="container-md shadow p-3 mb-5 bg-body rounded login-signin">
        <form action="" method="post" class="my-3">
            <h2 class="text-uppercase text-center mb-5"><a href="home.php" class="previous round back"><i class="fas fa-arrow-circle-left"></i></a>&nbsp; login</h2>


            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" name="username" class="form-control" required>
                <label class="form-label">Username/Email address</label>
            </div>
            
            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" class="form-control" required>
                <label class="form-label">Password</label>
            </div>
            
            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-between">
                <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                </div>
            
                <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
                </div>
            </div>
            
            <!-- Submit button -->
            <div class="d-flex justify-content-center m-2">
                <button type="submit" class="btn btn-block btn-lg gradient-custom-4 sign-in">Sign in</button>
            </div>

            <!-- Register buttons -->
            <div class="text-center">
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1 facebook sign-with">
                <i class="fab fa-facebook-f"></i>
                </button>
            
                <button type="button" class="btn btn-link btn-floating mx-1 google sign-with">
                <i class="fab fa-google"></i>
                </button>
            
                <button type="button" class="btn btn-link btn-floating mx-1 twitter sign-with">
                <i class="fab fa-twitter"></i>
                </button>
            
            </div>
        </form>

        <!-- <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php //echo $error; ?></div> -->
    </div>




    <script src="jshome.js"></script> 
  </body>
</html>