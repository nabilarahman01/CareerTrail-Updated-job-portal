

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
    	
    	/*
 * Globals
 */

/* Links */
a,
a:focus,
a:hover {
  color: #fff;
}

/* Custom default button */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus {
  color: #333;
  text-shadow: none; /* Prevent inheritance from `body` */
  background-color: #fff;
  border: .05rem solid #fff;
}


/*
 * Base structure
 */

html,
body {
  height: 100%;
  background-color: #333;
}

body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-pack: center;
  -webkit-box-pack: center;
  justify-content: center;
  color: #fff;
  text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
  box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
}

.cover-container {
  max-width: 42em;
}


/*
 * Header
 */
.masthead {
  margin-bottom: 2rem;
}

.masthead-brand {
  margin-bottom: 0;
}

.nav-masthead .nav-link {
  padding: .25rem 0;
  font-weight: 700;
  color: rgba(255, 255, 255, .5);
  background-color: transparent;
  border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link:hover,
.nav-masthead .nav-link:focus {
  border-bottom-color: rgba(255, 255, 255, .25);
}

.nav-masthead .nav-link + .nav-link {
  margin-left: 1rem;
}

.nav-masthead .active {
  color: #fff;
  border-bottom-color: #fff;
}

@media (min-width: 48em) {
  .masthead-brand {
    float: left;
  }
  .nav-masthead {
    float: right;
  }
}


/*
 * Cover
 */
.cover {
  padding: 0 1.5rem;
}
.cover .btn-lg {
  padding: .75rem 1.25rem;
  font-weight: 700;
}


/*
 * Footer
 */
.mastfoot {
  color: rgba(255, 255, 255, .5);
}
    </style>


  </head>

  <body class="text-center">

    

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Hello Sir!!!.</h1>
         <?php
include('connection/db.php');
if(isset($_POST['submit'])){


	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$dob=$_POST['dob'];
  $number=$_POST['number'];
	$file=$_FILES["file"]["name"];
	$temp_name=$_FILES["file"]["tmp_name"];
	$id_job=$_POST['id_job'];
	$job_seeker=$_POST['job_seeker'];
  $major=$_POST['major'];
  $experience=$_POST['experience'];
  $cgpa=$_POST['cgpa'];
  $experties=$_POST['experties'];

  $sql=mysqli_query($conn,"select * from job_apply where job_seeker='$job_seeker' and id_job='$id_job'");
  if (mysqli_num_rows($sql)>0) {
    echo "<h1>You already applied for this job </h1>";
    
    // code...
  }else{



  

	move_uploaded_file($_FILES["file"]["tmp_name"],"files/".$file);
	$query=mysqli_query($conn,"insert into job_apply(first_name,last_name,dob,file,id_job,job_seeker,mobile_number,major,experience,cgpa,experties)values('$first_name','$last_name','$dob','$file','$id_job','$job_seeker','$number','$major','$experience','$cgpa','$experties')");
	if ($query) { ?>
		<p class="lead">Apply Successfull..Company will send Email in short time</p>
		
	<?php	
	}else{

		echo "not";
	}
}
}


?>
       
        <p class="lead">
          <a href="index.php" class="btn btn-lg btn-secondary">Main Page</a>
        </p>
      </main>

      
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
