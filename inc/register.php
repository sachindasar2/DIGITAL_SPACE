<?php
session_start();
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$month=$_POST['month'];
$day=$_POST['day'];
$year=$_POST['year'];
$gender=$_POST['gender'];
$con=mysqli_connect("localhost","root","BATMAN","sachindb");
		// Check connection
		if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}else{
mysqli_query($con,"insert into users(userid,password,name,dob,gender) values('".$username."','".$password."','".$name."','".$year.$day.$month."','".$gender."')");
			$_SESSION["loggedin"] =$_POST['username'];
?>
<html>
	<p> YOU HAVE NOW BEEN REGISTERED</p>
	<p><a href="../loginpage.php">CLICK HERE TO CONTINUE</a></p>
</html>
<?php
}
mysqli_close($con);
?>