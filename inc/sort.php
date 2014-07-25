<?php 

session_start();
$sort=$_POST["sort"];


$con=mysqli_connect("localhost","root","BATMAN","sachindb");

 if (mysqli_connect_errno()) {
		   echo "Failed to connect to MySQL: " . mysqli_connect_error();
		 }else{



 ?>