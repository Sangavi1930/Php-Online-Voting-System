<?php
session_start();
if(!isset($_SESSION['regno']) )
{
header('location: login.php');
}


?>

<!DOCTYPE>
<head> 
	<html>
	<title>Student Online Voting System</title>

	<link rel="stylesheet" href="style.css" type="text/css" / >
	<link rel="stylesheet" href="w3.css" type="text/css" / >
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css" type="text/css" / >
	</head>
	<body>
<div id="container">
<div class="header">
		<h2>Student Online Voting System</h2>
	</div>
<nav>
	<div class="navigation">
<ul>

	<li><a href="onlinevotingsystem.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
	<li><a href="onlinevotingsystem.php?onlinevotingsystemvote">Vote</a></li>
    <li><a href="onlinevotingsystem.php?ViewResults"> View Results</a></li>
<li>	<a hre="#">
<div class="welcom">
 Welcome : 
	<?php 
include("databaseconnect.php");

if(isset($_SESSION['regno'])) {

$regnosess = $_SESSION['regno'];

	$sql = "SELECT * FROM `members` WHERE `regno` = '$regnosess' ";
    $qry = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($qry);

    $regnumber = $row['regno'];

    echo $regnumber ;


}
    ?>


</div></a>
</li>

	<li><a href="logout.php">Logout</a></li>

</ul>

</div>
	</nav>

<!--<div id="loginform">


	<form method="post" action="functions.php">
<input type="text" name="username" placeholder="username"/><br /><br />
<input type="text" name="username" placeholder="username"/><br /><br />
<input type="submit" name="submitdetails" Value="Login"/>
	</form><br /><br />
	Want To Register ? <a href="register.php">Click here</a>
</div>-->




<?php

if(isset($_GET['onlinevotingsystemvote'])) {
	include("onlinevotingsystemvote.php");
} else if(isset($_GET['ViewResults'])) {
	include("ViewResults.php");
}


?>


<footer>
	<p> Student Online Voting System <?php echo Date('Y'); ?> All Rights Reserved</p>
</footer>

</div>
	</body>
	</html>