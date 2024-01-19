<?php
include 'data.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
  <link rel="stylesheet" href="./login.css">
  <title>Document</title>
</head>
<body>
  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                <form action="<?php $_SERVER['PHP_SELF'] ?> " method="POST">
                    <h2>login to your account</h2>
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11" >email</label>
                      <input type="text" id="form2Example11" class="form-control"
                        placeholder="Phone number or email address" name="email" />
                    </div>
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22" >Password</label>
                      <input type="password" id="form2Example22" class="form-control" name="password"/>
                    </div>
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button type="submit" name="submit" class="btn btn-secondary btn-block fa-lg gradient-custom-2 mb-3">Log
                        in</button>
                      <a class="text-muted" href="#!">Forgot password?</a>
                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?</p>
                      <button type="button" class="btn btn-outline-secondary" style=" background: #99fc90;"><a href="signup.php">Create new</a></button>
                    </div>
  
                  </form>
                  <?php 
                        if(isset($_POST['submit'])){
                            $email=mysqli_real_escape_string($conn,$_POST['email']);
                            $password=md5($_POST['password']);
                            $sql="select username from sign where email='{$email}' AND password='{$password}'";
                            $result=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_assoc($result)){
                                   session_start();
                                   $SESSION['username']=$row['username'];
                                  
                                   header('Location:/major/home.php');
                                  }
                              }
                            else{
                               echo"<div class='alert'>username and password not match</div>";
                            }
                        }    
                    ?>
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">Minimart</h4>
                  <p class="small mb-0">Online grocery shopping is a way of buying food and other household necessities using a
            web-based shopping</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>


