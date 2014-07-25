<?php
session_start();
$user = $_POST['username'];
$password = $_POST['password'];
echo "Username: ".$user."Password:".$password;
$con=mysqli_connect("localhost","root","BATMAN","sachindb");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
echo "connected to MySQL: ";
$something = mysqli_query($con,"SELECT * FROM users WHERE userid='".$user."' AND password='".$password."'");
if($jumba = mysqli_fetch_array($something)){
//echo "you are logged in";
$_SESSION["loggedin"] =$_POST['username'];
//echo "the value set is ". $_SESSION["loggedin"];
//$back='/BLOG3/1';
//$home_url = 'http://' . $_SERVER['HTTP_HOST'] . $back . '/homepage.php';
$home_url = '../homepage.php';
header('Location: '.$home_url);
//header('Location: '.$home_url);
}else{
$home_url = '../loginpage.php';
header('Location: '.$home_url);
}
}
mysqli_close($con);
?>