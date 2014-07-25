<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <?php
    $sqlCommand="   SELECT id,linklabel,extra FROM pages WHERE showing='1'ORDER BY pageorder ASC";
    $query = mysqli_query($con,$sqlCommand) or die (mysqli_error($con));
    $menuDisplay='';
    while($row=mysqli_fetch_array($query)){
    $pid=$row["id"];
    $linklabel=$row["linklabel"];
    $extra=$row["extra"];
    $menuDisplay.='<li><a href="'.$extra.'.php?pid='.$pid.'">'.$linklabel.'</a></li>';
    }
    mysqli_free_result($query);
    ?>
    <body>
        <div id="container">

<!--NAVIGATION START    -->
<div id="nav">
    <div id="menutop">
        <label for="search" >search:</label><form action=""><input type="text" name="search" ></form>
        <span id="welcome">WELCOME:
        <?php  echo $_SESSION['loggedin']; ?>
        </span>
        <span id="signupbutton"><a href="admin.php">SETTINGS</a></span>
    </div>
    <div id="one">
        <h1 id="BIG">DIGITAL SPACE</h1>
        <div id="user">
            <ul>
                <?php echo $menuDisplay; ?>
            </ul>
        </div>
    </div>
</div>
<!--NAVIGATION END  -->