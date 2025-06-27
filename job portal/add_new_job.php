<?php
session_start();

include('connection/db.php');
$login= $_SESSION['email'];
  $job_title = $_POST['job_title'];
  $Description = $_POST['Description'];
  $country = $_POST['country'];
  $state = $_POST['state'];
 $city = $_POST['city'];
 $keyword = $_POST['keyword'];
 $jmajor=$_POST['jmajor'];
  $jexperience=$_POST['jexperience'];
  $jcgpa=$_POST['jcgpa'];
  $jexperties=$_POST['jexperties'];

 



$query=mysqli_query($conn,"insert into all_jobs(customer_email,job_title,des,country,state,city,keyword,jmajor,jexperience,jcgpa,jexperties)values ('$login','$job_title','$Description','$country','$state','$city','$keyword','$jmajor','$jexperience','$jcgpa','$jexperties')");

if($query){

	echo "<div class = 'alert alert-success'>Data insertion successfull</div>";
}else{
	echo "<div class = 'alert alert-danger'>Please try again</div>";

}


 ?>