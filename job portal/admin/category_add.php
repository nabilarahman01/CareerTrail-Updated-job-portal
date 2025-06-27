<?php
include('connection/db.php');
 $category = $_POST['category'];
 $Description = $_POST['Description'];


include('connection/db.php');
$query=mysqli_query($conn,"insert into job_category(category,des)values ('$category','$Description')");

if($query){

	echo "<div class = 'alert alert-success'>Data insertion successfull</div>";
}else{
	echo "<div class = 'alert alert-danger'>Please try again</div>";

}

 ?>