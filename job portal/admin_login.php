<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Admin Login</title>

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
      background-image: url('lel.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .form-signin {
      max-width: 400px;
      padding: 15px;
      background-color: rgba(255, 255, 255, 0.9);
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
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
      display: block;
      margin: 0 auto; /* Center the button */
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
        padding: 10px;
      }
    }
  </style>
</head>
<body>
 <form class="form-signin" id = "admin_login" method="post" action="admin_login.php" name="admin_login">
      <img class="mb-4" src="admin.png" alt="" width="100" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required>
      
      <input class="btn btn-lg btn-primary" name ="submit" id="submit"type="submit" value="Sign In">
      <p class="mt-5 mb-3 text-muted">&copy; 2023-2024</p>
    </form>
</body>
</html>
<?php
include('connection/db.php');
if(isset($_POST['submit'])){
	 $email=$_POST['email'];
	 $pass=$_POST['pass'];
    $encpassword=md5($pass);
	$query=mysqli_query($conn,"select * from admin_login where admin_email='$email'and admin_pass = CONCAT('$', '$encpassword')");
	if($query){


	if(mysqli_num_rows($query)>0){
		$_SESSION['email']=$email;
		header('location: admin_dashboard.php');
	}else{
		echo "<script> alert('Email or Password is incorrect, Please try again')</script>";
	}
}
}
 ?>
