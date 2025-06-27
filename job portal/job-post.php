<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Jobseeker Login</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="admin/css/admin_login.css" rel="stylesheet">
 <!--  <script src="js/admin_login.js"></script> -->
  </head>

  <title>Login Form</title>
  <style>
    body {
      background-image: url('login.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }
    .form-signin {
      max-width: 400px;
      margin: 0 auto;
      padding: 15px;
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      margin-top: 100px;
    }
    .form-signin img {
      margin: 0 auto;
      display: block;
    }
    .form-signin h1 {
      font-size: 24px;
      text-align: center;
      margin-bottom: 20px;
    }
    .form-signin label {
      font-weight: 500;
    }
    .form-signin input[type="email"],
    .form-signin input[type="password"] {
      margin-bottom: 15px;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ced4da;
      font-size: 16px;
    }
    .form-signin .btn-primary {
      background-color: #007bff;
      border: none;
      transition: background-color 0.2s;
      padding: 8px 12px;
      font-size: 16px;
      max-width: 200px;
      width: 100%;
    }
    .form-signin .btn-primary:hover {
      background-color: #0056b3;
    }
    .form-signin a {
      display: block;
      text-align: center;
      margin-top: 10px;
      color: #007bff;
    }
    .form-signin p {
      text-align: center;
      margin-top: 20px;
      color: #6c757d;
    }
    
    @media (max-width: 576px) {
      .form-signin {
        margin-top: 50px;
        padding: 10px;
      }
    }
  </style>
</head>
<body>
  <form class="form-signin" id="admin_login" method="post" action="job-post.php">
    <img class="mb-4" src="iconL.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="email" class="sr-only">Email address</label>
    <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
    <label for="pass" class="sr-only">Password</label>
    <input type="password" id="pass" name="Password" class="form-control" placeholder="Password" required>
    <button class="btn btn-lg btn-primary btn-block mx-auto" name="submit" id="submit" type="submit">Sign In</button>
    <a href="sign_up.php">Create an Account</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2023-2024</p>
  </form>
</body>
</html>
<?php
include('connection/db.php');
if(isset($_POST['submit'])){
   $email=$_POST['email'];
   $pass=$_POST['Password'];
   $encpassword=md5($pass);
  $query=mysqli_query($conn,"select * from jobseeker where email='$email'and password='$encpassword'");
  if($query){


  if(mysqli_num_rows($query)>0){
    $_SESSION['email']=$email;
    header('location: index.php');
  }else{
    echo "<script> alert('Email or Password is incorrect, Please try again')</script>";
  }
}
}
 ?>

