<?php

session_start();
if ($_SESSION['email']==true){

}else{
  header('location:admin_login.php');
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

    <title>Dashboard Template for Bootstrap</title>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"rel="stylesheet">
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- datatables css -->
<link rel ="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">


   

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
   
  </head>
        




  <body>
     <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#" style="font-size: 16px;"><?php echo $_SESSION['email']; ?></a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php"style="font-size: 20px;">Sign out</a>
        </li>
      </ul>
    </nav>