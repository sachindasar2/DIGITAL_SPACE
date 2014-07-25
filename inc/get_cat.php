<?php
$con          =mysqli_connect("$db_host","$db_username","$db_pass","$db_name");

    $sqlCommand = "SELECT cat_id,name FROM categories ORDER BY cat_id ASC";
    $query = mysqli_query($con,$sqlCommand);
    $catDisplay='';
    while($row =mysqli_fetch_array($query)){
    $cid =$row["cat_id"];
    $cat =$row["name"];
    $catDisplay .='<li><a href="blogpage.php?cid='.$cid.'">'.$cat.'</a></li>';
    }
    mysqli_free_result($query);
    ?>