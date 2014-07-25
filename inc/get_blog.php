<?php
if(!$_GET['bpid']){
$blogid ='1';
}else{
$blogid =$_GET['bpid'];
}
$sqlCommand ="   SELECT bpid,blogbody FROM blogpages WHERE bpid='$blogid' LIMIT 1";
$query = mysqli_query($con,$sqlCommand) or die (mysqli_error($con));

while($row =mysqli_fetch_array($query)){
$body =$row["blogbody"];
}
mysqli_free_result($query);
?>