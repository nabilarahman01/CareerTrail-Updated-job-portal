<?php
include('connection/db.php');
 $Company = $_POST['Company'];
 $Description = $_POST['Description'];
 $admin = $_POST['admin'];


include('connection/db.php');
$query=mysqli_query($conn,"insert into company(company,des,admin)values ('$Company','$Description','$admin')");

if($query){

	echo "<div class = 'alert alert-success'>Data insertion successfull</div>";
}else{
	echo "<div class = 'alert alert-danger'>Please try again</div>";

}

 ?>
