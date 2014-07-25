<?php
session_start();
$nall = $_POST['columnsall'];
$none = $_POST['columnsone'];
$nno = $_POST['columnsno'];


$con=mysqli_connect("localhost","root","BATMAN","sachindb");

		 // Check connection
		 if (mysqli_connect_errno()) {
		   echo "Failed to connect to MySQL: " . mysqli_connect_error();
		 }else{
			mysqli_query($con,"insert into users(all,one,no) values('".$nall."','".$none."','".$nno."')");

			  $_SESSION["all"] =$_POST['columnsall'];
			 $_SESSION["one"] =$_POST['columnsone'];

			 $_SESSION["no"] =$_POST['columnsno'];
 ?>
		 	 <html>
		 	 <p> YOU HAVE NOW BEEN REGISTERED</p>
		 	 <p><a href="homepage.php">CLICK HERE TO CONTINUE</a></p>
		 	 </html>
		 	<?php

		 }
		mysqli_close($con);


?>