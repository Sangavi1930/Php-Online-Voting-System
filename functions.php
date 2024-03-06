<?php

include("databaseconnect.php");

if(isset($_POST['submitlogindetails'])) {

$admin = $_POST['type'];
$student = $_POST['type'];


    if($student == 'Student') {

    		$regno    = $_POST['regno'];
	        $password = $_POST['password'];



	$select = "SELECT * FROM `members` WHERE `regno` = '$regno' ";
	$qry = mysqli_query($connect,$select);

	while($row = mysqli_fetch_array($qry)) {
		$dbregno = $row['regno'];
		$dbpass = $row['password'];

		}

		if (($regno == $dbregno) && ($password == $dbpass)) {
				session_start();
				$_SESSION['regno'] = $regno;;
			header('location: onlinevotingsystem.php');
		}else {
			header('location: login.php');
		}
	/*if($qry){
		header("location : onlinevoting.php");
		}*/


    }else if ($admin == 'Admin') {
    	
    	    $regno    = $_POST['regno'];
	        $password = $_POST['password'];



	$select = "SELECT * FROM `administartor` WHERE `email` = '$regno' ";
	$qry = mysqli_query($connect,$select);

	while($row = mysqli_fetch_array($qry)) {
		$dbemail = $row['email'];
		$dbpass = $row['password'];

		}

		if (($regno == $dbemail) && ($password == $dbpass)) {
				
			header('location: onlinevotingsystemadmin.php');
		} else {
			header('location: login.php');
		}
	
    	
    }
	

}



if(isset($_POST['submitregdetailsadmin']) ) {

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];


$insert = "INSERT INTO `administartor`(`fname`, `lname`, `email`, `password`) 
	                         VALUES ('$first_name','$last_name','$email','$password')";

	              $qry = mysqli_query($connect, $insert);

	              if( $qry) {
	              	echo " <p>Admin Account Created successfully </p> <br />" ; 
	              }
}


if(isset($_POST['submitAddCandidate'])) {
    $position = $_POST['position'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "INSERT INTO `candidates`(`first_name`, `last_name`, `email`, `password`, `position`) 
	                         VALUES ('$first_name','$last_name','$email','$password', '$position')";

    $sql = mysqli_query($connect, $sql);
if($sql) {
	header('location: onlinevotingsystemadmin.php?Candidates');

}


}

if(isset($_POST['submitAddPosition'])) {
	$position = $_POST['position'];
$insert = "INSERT INTO `Position`(`Position`) 
	                         VALUES ('$position')";

	              $qry = mysqli_query($connect, $insert);

	              if( $qry) {
	              	echo " <p>Position Added successfully </p> <br />" ; 
	              	header('location: onlinevotingsystemadmin.php?Positions');
	              }
}



//submitregdetailsstudents

if(isset($_POST['submitregdetailsstudents'])) {
   
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$admno     = $_POST['admno'];
	$regno     = $_POST['regno'];
	$email 		= $_POST['email'];
	$password 	= $_POST['password'];
	$sql = "INSERT INTO `members`(`first_name`, `last_name`, `admno`, `regno`, `email`, `password`) 
	                      VALUES ('$first_name','$last_name','$admno','$regno','$email','$password')";

    $sql = mysqli_query($connect, $sql);
if($sql) {

	header('location: onlinevotingsystemadmin.php?Students');


}


}



?>