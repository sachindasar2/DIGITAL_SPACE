<?php
$db_host      = "localhost";
$db_username  = "root";
$db_pass      = "BATMAN";
$db_name      = "sachindb";
session_start();
if(isset($_SESSION['loggedin'])){
$con          =mysqli_connect("$db_host","$db_username","$db_pass","$db_name");
}
else{
echo'<h3>session not valid Login again</h3>
please<a href ="login2.html">login</a> again';
die("could not connect to mysql");
mysqli_close();
}
?>