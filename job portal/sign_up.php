
<?php
    include('connection/db.php');
    if(isset($_POST['submit'])){
      $email=$_POST['email'];
      $Password=$_POST['Password'];
      $first_name=$_POST['first_name'];
      $last_name=$_POST['last_name'];
      $mobile_number=$_POST['mobile_number'];
      $encpassword=md5($Password);

      $query=mysqli_query($conn,"insert into jobseeker(email,password,first_name,last_name,dob,mobile_number) values('$email','$encpassword','$first_name','$last_name','$dob','$mobile_number')");
      if ($query) {
        echo "<script>alert('Now you can login')</script>";
          header('location:job-post.php');
      }else{
        echo "<script>alert('Error')</script>";

      }

    }
    



  ?>

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

<title>Sign Up</title>
  <style>
    /* Add a style block to define the CSS */
    body {
      background-image: url('signUp.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .form-container {
      border: 2px solid #000;
      padding: 20px; /* Reduce padding for a shorter form */
      background-color: #f0f8ff; /* Light blue background color */
      border-radius: 15px; /* Rounded corners */
      max-width: 400px;
      margin: 0 auto;
      text-align: center; /* Center align contents including the button */
    }

    .form-container img {
      display: block;
      margin: 0 auto 15px; /* Center the image and add spacing below */
    }

    .form-container h1 {
      font-size: 22px; /* Slightly smaller font size */
      margin-bottom: 15px; /* Reduce spacing below the heading */
    }

    .form-control {
      width: 100%;
      padding: 8px; /* Reduce padding for a shorter input */
      margin-bottom: 10px; /* Reduce spacing between input fields */
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px; /* Slightly smaller font size */
    }

    /* Add a bit of margin to create a gap between email and password */
    #Password {
      margin-top: 10px;
    }

    .btn-primary {
      display: inline-block; /* Display the button as an inline-block element */
      padding: 7px 12px; /* Adjust padding for a smaller button */
      border: none;
      border-radius: 5px;
      background-color: #007bff;
      color: #fff;
      font-size: 14px; /* Slightly smaller font size */
      cursor: pointer;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    .form-container a {
      display: block;
      text-align: center;
      margin-top: 8px; /* Reduce spacing above the "Already Have an Account?" link */
      color: #333;
    }

    .text-muted {
      text-align: center;
      margin-top: 15px; /* Reduce spacing above the copyright text */
    }
  </style>
</head>
<body>
  <div class="form-container">
    <form class="form-signin" method="post" action="sign_up.php">
      <img class="mb-3" src="iconL.png" alt="" width="72" height="72">
      <h1 class="h3 mb-2 font-weight-normal">Create an Account</h1>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
      <input type="password" id="Password" name="Password" class="form-control" placeholder="Password" required>
      <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" required>
      <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" required>
      <input type="tel" id="mobile_number" name="mobile_number" class="form-control" placeholder="Mobile Number" required>
      <input type="date" id="dob" name="dob" class="form-control" required>
      <button class="btn btn-lg btn-primary" name="submit" id="submit" type="submit">Sign Up</button>
      <a href="job-post.php">Already Have an Account?</a>
      <p class="mt-3 mb-2 text-muted">&copy; 2023-2024</p>
    </form>
  </div>
</body>
  
</html>


