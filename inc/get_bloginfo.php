<?php
$sql = "SELECT COUNT(bpid) FROM blogpages ";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_row($query);
$rows = $row[0];
$page_rows = 10;
$last = ceil($rows/$page_rows);
//--------one-------------
if($last < 1){
$last = 1;
}
$pagenum = 1;
//---------two---------------
if(isset($_GET['pn'])){
$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
}
//------three----------------
if ($pagenum < 1) {
$pagenum = 1;
} else if ($pagenum > $last) {
$pagenum = $last;
}
//----------------------------
$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
$sql = "SELECT bpid, blogpagetitle, blogdescription FROM blogpages ORDER BY bpid ASC $limit";
$query = mysqli_query($con, $sql);
$paginationCtrls = '';
//----------------four----------
if($last != 1){
    if ($pagenum > 1) {
    $previous = $pagenum - 1;
    $paginationCtrls .= '<li><a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'">PREVIOUS</a></li> ';
    $paginationCtrls .='<li>page : '.$pagenum.' of '.$last.'</li>';
    }
    if ($pagenum != $last) {
    $next = $pagenum + 1;
    $paginationCtrls .= '<li><a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'">NEXT</a></li> ';
    $paginationCtrls .='<li>page : '.$pagenum.' of '.$last.'</li>';
    }
}
//-----------------------------
$blogbody='';
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
    $bpid = $row["bpid"];
    $bloglabel=$row["blogpagetitle"];
    $blogdescription=$row["blogdescription"];
    $blogbody.='<div class="box"><h3><a href="blogmain.php?bpid='.$bpid.'">'.$bloglabel.' </a></h3><p>'.$blogdescription.'</p></div>';
}
mysqli_close($con);
?>