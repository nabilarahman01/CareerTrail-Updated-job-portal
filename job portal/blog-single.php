<?php
session_start();
if (isset($_SESSION['email'])) {
  // code...
}else{

  header('location:job-post.php');
}



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ANjobs </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">ANjobs</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          
	          <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
	           <?php
            if (isset( $_SESSION['email'])) { ?>
              <li class="nav-item cta mr-md-2"><a href="job-post.php" class="nav-link"><?php echo $_SESSION['email']; ?></a></li>
              <li class="nav-item cta cta-colored"><a href="logout.php" class="nav-link">Logout</a></li>

              <?php
            }else{ ?>
                 <li class="nav-item cta mr-md-2"><a href="job-post.php" class="nav-link">Log In</a></li>
            


              <?php

            }


            ?>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->



     <?php

            include('connection/db.php');
            $id=$_GET['id'];

      $query=mysqli_query($conn,"select * from all_jobs where job_id = '$id'");
      while ($row=mysqli_fetch_assoc($query)) {
           $title = $row['job_title'];
           $des=$row['des'];
           $country=$row['country'];
           $state=$row['state'];
           $city=$row['city'];
           $id_job=$row['job_id'];

      }
?>
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/main1.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-3"><a href="blog.html">Apply Jobs <i class="ion-ios-arrow-forward"></i></a></span> <span>submission</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">SUBMIT YOUR DETAILS</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3"><td><?php echo $title;?></td></h2>
            <h4><?php echo $country; ?>,<?php echo $state; ?>,<?php echo $city; ?></h4>

            <p><?php echo $des; ?>
              
            </p>
            <p>
              <img src="images/jsea.png" alt="" class="img-fluid">
            </p>
            <form action="apply_job.php" method="post" id="JobPortal" enctype="multipart/form-data" style="border: 1px solid gray;">
              <div style="padding: 5%;">
                <input type="hidden" name="job_seeker" value="<?php echo $_SESSION['email'];  ?>" id="job_seeker" >
                <input type="hidden" name="id_job" value="<?php echo $id_job;  ?>" id="id_job" >
             
                <div class="row">
  <div class="col-sm-6">
    <label for="">ENTER YOUR FIRST NAME</label>
    <input type="text" class="form-control" name="first_name" placeholder="Enter First Name">
  </div>
  <div class="col-sm-6">
    <label for="">ENTER YOUR LAST NAME</label>
    <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name">
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <label for="">ENTER YOUR MOBILE NUMBER</label>
    <input type="number" class="form-control"  name="number" placeholder="Contact Number">
  </div>
  <div class="col-sm-6">
    <label for="">EMAIL</label>
    <input type="text" class="form-control" disabled value="<?php echo $_SESSION['email'];?>" >
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <label for="">ENTER DATE OF BIRTH</label>
    <input type="date" class="form-control" name="dob" placeholder="Enter Date of Birth">
  </div>
  


  <div class="col-sm-6">
    <label for="">MAJOR SUBJECT</label>
    <input type="text" class="form-control" name="major" placeholder="Enter Major Subject">
  </div>
  <div class="col-sm-6">
    <label for="">CGPA</label>
    <input type="text" class="form-control" name="cgpa" placeholder="Enter CGPA">
  </div>



  <div class="col-sm-6">
    <label for="">EXPERIENCE</label>
    <input type="text" class="form-control" name="experience" placeholder="Enter Experience">
  </div>
  <div class="col-sm-6">
    <label for="">FIELD OF EXPERTISE</label>
    <input type="text" class="form-control" name="experties" placeholder="Enter Field of Expertise">
  </div>


               <div class="col-sm-6">
                 <label for="">Add Resume</label>
                 <input type="file" name="file"class="form-control" >
               </div>


                </div>
 
                
                <br>


              
            
              <input type="submit" name="submit" value="submit" placeholder="SUBMIT" class="btn btn-primary btn-block">
              



          



              </div>
            </form>
           
           
          


            
              
              


            
           

    
           
        
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>