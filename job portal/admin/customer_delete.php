<?php 
include('connection/db.php');

$del=$_GET['del']; 

$query=mysqli_query($conn,"delete from admin_login where id = '$del' ");
if($query){
	echo "<script> alert('Record has been deleted successfully')</script>";
	header('location: Customers.php');
}else
{
	echo "<script> alert('ERror')</script>";
}


 ?>