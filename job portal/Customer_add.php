<?php
include('connection/db.php');
 $email =$_POST['email'];
 $Username =$_POST['Username'];
$Password =$_POST['Password'];
 $first_name =$_POST['first_name'];
 $last_name =$_POST['last_name'];
 $admin_type =$_POST['admin_type'];
 $encpassword=md5($Password);

include('connection/db.php');
$query=mysqli_query($conn,"insert into admin_login(admin_email,admin_pass,admin_username,first_name,last_name,admin_type)values ('$email','$$encpassword','$Username','$first_name','$last_name','$admin_type')");

if($query){

	echo "<div class = 'alert alert-success'>Data insertion successfull</div>";
}else{
	echo "<div class = 'alert alert-danger'>Please try again</div>";

}

 ?>