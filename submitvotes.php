<?php
include("databaseconnect.php");

if(isset($_POST['submitvotes'])) {
	
	$vote = $_REQUEST['submitvotes']; 

	$sql = "UPDATE `candidates` SET votescasted = votescasted + 1 WHERE  `id` = '$vote'";
	$qry = mysqli_query($connect, $sql);
	if ($qry){
		header("location: onlinevotingsystem.php?ViewResults");
	}
}
mysqli_close($connect);
	?>