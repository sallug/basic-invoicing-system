<?php
include 'confiq.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=SERVER_URL?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=SERVER_URL?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=SERVER_URL?>dist/css/adminlte.min.css">

  <style>
    .error{
         
         color: red;
        
    }
    input{
      outline: 
    }
    
    
    .error-input{
      outline:1px solid red;
      z-index: 1;
    }
    .correct-input{
      outline:1px solid green;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?=SERVER_URL?>index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>


      <form action="<?=SERVER_URL?>index3.html" method="post" id="form">
        
      
     
      <div id="emailerror" class="error"></div>
      <div class="input-group mb-3">
    
          <input type="email" class="form-control" placeholder="Email" id="email" required>
          
         
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
              
              
            </div>
          </div>
        </div>
      
        
        <div id="passworderror" class="error"></div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
         
          <!-- /.col -->
          <div class="col-4 mx-auto ">
            <button type="submit" onclick="return validateform()" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     
    
    <!-- /.login-card-body -->
  </div>
</div>

<!-- /.login-box -->
<script>

function validateform(){
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    
    var emailerror = document.getElementById("emailerror");
    var passworderror = document.getElementById("passworderror");
    var ret = true;

    if(email === ''){
       
        document.getElementById("emailerror").innerHTML ="Plz Enter Email";
        
        document.getElementById("email").classList.add("error-input");
        ret = false;
    } else if (!validateEmail(email)) {
        // emailerror.innerHTML = "Plz Enter Correct Email Format";
        document.getElementById("emailerror").innerHTML ="Plz Enter Correct Email Format";
        document.getElementById("email").classList.add("error-input");
        ret = false;
    } else {
      document.getElementById("emailerror").innerHTML = "";
        document.getElementById("email").classList.add("correct-input"); 
    }

    if(password === ''){
        passworderror.innerHTML = "Password is Required";
        document.getElementById("password").classList.add("error-input");
        ret = false;
    } else if(password.length < 6){
        
        document.getElementById("passworderror").innerHTML = "Password is too Short";

        document.getElementById("password").classList.add("error-input");
        ret = false;
    } else {
        passworderror.innerHTML = "";
        document.getElementById("password").classList.add("correct-input");
    }

    return ret;
}

function validateEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

</script>
<!-- jQuery -->
<script src="<?=SERVER_URL?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=SERVER_URL?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=SERVER_URL?>dist/js/adminlte.min.js"></script>
</body>
</html>
