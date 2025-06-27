<?php
$page='home';
session_start();
include('connection/db.php');
$query=mysqli_query($conn,"select * from job_category");

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ANJOBS</title>
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
  <style>
  .btn {
    font-size: 20px;
    padding: 10px 20px; /* Adjust padding as needed */
    margin-left: 100px; /* Adjust margin to move the button to the right */
  }
</style>
  <body>

    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">ANjobs</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	          <?php
	          if (isset( $_SESSION['email'])) { ?>
	          	<li class="nav-item cta mr-md-2"><a href="job-post.php" class="nav-link"><?php echo $_SESSION['email']; ?></a></li>
	          	<li class="nav-item cta cta-colored"><a href="my_profile.php" class="nav-link">Profile</a></li>
              <li class="nav-item cta cta-colored" style="padding-left: 5px;"><a href="faq.php" class="nav-link">FAQ</a></li>



	          	<div>
	          	<li class="nav-item cta cta-colored" style="padding-left: 10px;"><a href="logout.php" class="nav-link">Logout</a></li>

	          	</div>


	          	<?php
	          }else{ ?>
	          	   <li class="nav-item cta mr-md-2"><a href="job-post.php" class="nav-link">Log In</a></li>
	          	    <li class="nav-item cta mr-md-2"><a href="admin/admin_login.php" class="nav-link">Post a Job</a></li>
	          


	          	<?php

	          }


	          ?>


	       

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/main1.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We have <span class="number" data-number="8500">0</span> great job offers you deserve!</p>
            <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Your Dream <br><span>Job is Waiting</span></h1>

						<div class="ftco-search">
							<div class="row">
		            <div class="col-md-12 nav-link-wrap">
			            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			              <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill"  role="tab" aria-controls="v-pills-1" aria-selected="true">Find a Job</a>


			            </div>
			          </div>
			          <div class="col-md-12 tab-wrap">
			            
			            <div class="tab-content p-4" id="v-pills-tabContent">

			              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
			              	<form action="index.php" method="post" class="search-job">
			              		<div class="row">
			              			<div class="col-md">
			              				<div class="form-group">
				              				<div class="form-field">
				              					<div class="icon"><span class="icon-briefcase"></span></div>
								                <input type="text" name="key" id="key" class="form-control"  placeholder="eg. Garphic. Web Developer">
								              </div>
							              </div>
			              			</div>
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
				              					<div class="select-wrap">
						                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
						                      	<input type="text" name="category" id="category" class="form-control"  placeholder="eg. CSE/EEE/ME">
            	
						                      </select>
						                    </div>
								              </div>
							              </div>
			              			</div>
			              	
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
								                <button class="btn btn-primary" name="search"id="search">Search</button>
								              </div>
							              </div>
			              			</div>
			              		</div>
			              	</form>
			              </div>
			              </div>
			            </div>
			          </div>
			        </div>
		        </div>
          </div>
        </div>
      </div>
    </div>

    <?php

    	    	include('connection/db.php');
    	    	if(isset($_POST['search']))
    	    	{

    	    			$search=$_POST['key'];
    	    			$category=$_POST['category'];
    	    			$query="select * from all_jobs join company on all_jobs.customer_email=company.admin where all_jobs.keyword like'%$search%' Or all_jobs.des='%$search%'";
    	$result = mysqli_query($conn,$query);

    	    	}else
    	    	{

    	    		$query="select * from all_jobs join company on all_jobs.customer_email=company.admin  ";
    	$result = mysqli_query($conn,$query);


    	    	}
    	    	

    	
    	
    	
    	

    ?>

<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading"> Jobs</span>
            <h2 class="mb-4"><span>ALL</span> Jobs</h2>
          </div>
        </div>
				<div class="row">
					<?php
						while ($row=mysqli_fetch_assoc($result)){ ?>
							<div class="col-md-12 ftco-animate">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">




              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3"><?php echo $row['job_title'];   ?></h2>
                  <div class="badge-wrap">
                   <span class="bg-primary text-white badge py-2 px-3"><?php echo $row['city'];?></span>
                  </div>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3"><span class="icon-layers"></span> <a href="#"><?php echo $row['company'];  ?></a></div>
                  <div><span class="icon-my_location"></span> <span><?php echo $row['country'];?>,<?php echo $row['state'];?></span></div>
                </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="blog-single.php?id=<?php echo $row['job_id']?> " class="btn btn-primary py-2 mr-1">Apply Job</a>
                
                </a>
              </div>
            </div>
          </div><!-- end -->

					<?php	}
					?>

				






          
				</div>
				
		</section>
    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-resume"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Search Millions of Jobs</h3>
               
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-collaboration"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Easy To Manage Jobs</h3>
                
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-promotions"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Top Careers</h3>
              
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-employee"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Search Expert Candidates</h3>
               
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    

		
   
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/people.png);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                
		                <span>Join Us</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		               
		                <span>Find Jobs</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                
		                <span>Achieve Your Dreams</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">

		                <span>Dont forget to share</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

 <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-4"><span>Happy</span> Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/asif.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4"> The website's intuitive design and robust search filters make finding relevant positions easy. I especially appreciate the company profiles, which provide insights into the working environment. The timely job alerts keep me updated on new openings, and the application process is straightforward. A reliable platform that has enhanced my job search experience.</p>
                    <p class="name">Asif Rahman</p>
                    <span class="position">CEO Cefalo</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/mahiba.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">ANJobs is a game-changer in the job search arena. The comprehensive job listings cover a wide range of industries, and the detailed job descriptions help me make informed decisions as job locations are also mentioned. The ability to track application status keeps everything organized. Kudos to ANJobs for revolutionizing the way we search for jobs!</p>
                    <p class="name">Mahiba Nafia</p>
                    <span class="position">Database Engineer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/ramisha.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">ANJobs is a gem for job seekers. The recommendations are spot-on, and the company insights provide valuable context. The interface is intuitive, and applying for jobs is a breeze. A top-notch portal that streamlines the job search process effectively.</p>
                    <p class="name">Shaikh Ramisha Maliyat</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/nabila.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">NJobs opens doors to unforeseen opportunities. The site's sleek design and responsive layout make job hunting a pleasure. The application process is swift, and the minimalist setup is refreshing.  A roadmap to success in the job jungle..</p>
                    <p class="name">Nabila Rahman</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/arijit.png)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">NJobs is a career game-changer. The comprehensive skill assessment pinpointed my strengths, guiding me to roles that fit like a glove. The job listings are premium quality. This portal is a pro-level partner in achieving career mastery.</p>
                    <p class="name">Arijit Paul</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


   
		
		

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
        	<div class="col-md">
             <div class="ftco-footer-widget mb-6">
              <h2 class="ftco-heading-2">About</h2>
              <p>ANjjobs is a leading online job portal that serves as a dynamic platform connecting job seekers and employers across various industries. With a user-friendly interface and advanced features, ANjjobs streamlines the job search and recruitment process, making it easier for both candidates and companies to find their ideal matches.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                
                <li class="ftco-animate"><a href="https://www.facebook.com/arijit.paul.92560/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/ari._jit/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>

          <div class="col-md">
            <div class="ftco-footer-widget mb-6">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                 <li><span class="icon icon-map-marker"></span><span class="text"> 9 Gopi Kishan Lane,Wari,Dhaka,Bangladesh</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">0088 01777645699</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">ariijit00772@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

           
          </div>
        </div>
      </div>
    </footer>

    </footer>
    
  

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