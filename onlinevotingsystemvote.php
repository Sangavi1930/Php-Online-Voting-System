<div class="studentvote">
<div class="votingDropDown">	


<form method="post" action="onlinevotingsystem.php?onlinevotingsystemvote" id="onlinevotingsystem">

	<select name="selectCandidate" >

		

	<?php	
	//id="selectcand"
	$sqlQry = "select * from position";
	$qry = mysqli_query($connect, $sqlQry);
	//$positions = "";
	
	while($posrow=mysqli_fetch_array($qry)) {
    ?>

		<option value='<?php echo $posrow['Position']; ?>'> <?php echo $posrow['Position']; ?></option>
	<?php } ?>
</select>
		<input type="submit" name="searchcandidates" value="Show Candidate" />
		</form>

</div>
		<div id="alreadyVoted">
		<p>You Have Voted For :
		<ol>
		
		<?php 
		
		$sessregnosels = $_SESSION['regno'];
		$sel = " SELECT * FROM `votes` WHERE `regno` = '$sessregnosels' ";
		$qrysels = mysqli_query($connect,$sel);
		while($rowsels=mysqli_fetch_array($qrysels)){
			
			echo "<li>".$rowsels['Position']."</li>";
		}
		?>
		</ol>
		</p>
		
		</div>
<?php

include("databaseconnect.php");



if(isset($_POST['searchcandidates'])) {
	$chairperson = $_POST['selectCandidate'];
	if($chairperson == 'Chairperson') {
		//echo "Chairperson";		
	}

	$Secretary = $_POST['selectCandidate'];
	if($Secretary == 'Secretary') {
		//echo "Secretary";		
	}
		
	}

	//start of submit votes

		if(isset($_POST['submitvotes'])) {

$sessregno = $_SESSION['regno'];
	//$submitvotes = $_POST['submitvotes'];
$selectpos = "SELECT * FROM `position`";
$selectposqry = mysqli_query($connect,$selectpos);
$selectposfetch = mysqli_fetch_assoc($selectposqry);
$position_id = $selectposfetch['position_id'];

$selectcand = "SELECT * FROM `candidates`";
$selectcandqry = mysqli_query($connect,$selectcand);
$selectcandfetch = mysqli_fetch_assoc($selectcandqry);
$candidate_id = $selectcandfetch['candidate_id'];


     $candidateidvoted = $_POST['submitvotes'];
     $positionhidd     = $_POST['positionhidd'];
     $candfirstname    = $_POST['candfirstname'];
     $submitvotesid    = $_POST['submitvotesid'];


     $select = "SELECT * FROM `votes`";
     $selectres = mysqli_query($connect,$select);
    
     while ($selectvoted=mysqli_fetch_array($selectres) ) {
     $position_idofvoted = $selectvoted['Position'];
      $arrayName = array();
      $arrayName[] = $position_idofvoted;
      foreach ($arrayName as $key ) {
      	//echo "<pre>";
      	//print_r($key);
      	//echo "</pre>";
      }
    }
     	
//start select from positions table
     $select = "SELECT * FROM `position`";
     $selectres = mysqli_query($connect,$select);
    
     while ($selectvoted=mysqli_fetch_array($selectres) ) {
     $positionofvotedadded = $selectvoted['Position'];
      $arrayposorig = array();
      $arrayposorig[] = $positionofvotedadded;
  }
//endselect from positions table
     
     //$compare = count(array_intersect($arrayposorig, $arrayName)) > 0;

     //if($compare) {
		 
		 
		$selvtes = "SELECT * FROM `votes` WHERE `Position` = '$positionhidd' AND `regno` = '$sessregno' ";
		$qryvtes = mysqli_query($connect, $selvtes);
		$rows = mysqli_num_rows($qryvtes);
		
		if($rows == 0) {
     	$vote = "INSERT INTO votes (`Position`, `candidate_id`, `regno`,`votesnumber`) 
	                    VALUES ('$positionhidd','$submitvotesid','$sessregno', 1)";
		$voteqry = mysqli_query($connect, $vote);
		if($voteqry) 
			echo '<div class="w3-container w3-section w3-green">
		<span onclick="this.parentElement.style.display=\'none\'" class="w3-closebtn">&times;</span>
		  <h3>Info!</h3>
		  <p>voted succssesfully</p>
		</div>';
	
	} else {		
		echo '<div class="w3-container w3-section w3-red">
		<span onclick="this.parentElement.style.display=\'none\'" class="w3-closebtn">&times;</span>
		<h3>Info!</h3>
		<p>You can\'t vote twice In the same position , Select another position from a dropdown menu!!</p>
		</div>';
		
	}
	 }

	//end of submit votes


//start select candidates according to select option
	if(isset($_POST['searchcandidates'])) {



$Positioncandid = $_POST['selectCandidate'];

$sql = " SELECT * FROM `candidates` where `position` = '$Positioncandid'";
$qryy = mysqli_query($connect, $sql); 
$qryytwo = mysqli_query($connect, $sql);
$candRes = mysqli_fetch_assoc($qryytwo);
$andidateID = $candRes['candidate_id'];
$andidatepos= $candRes['position'];
$andidatefirst_name= $candRes['first_name'];

while($row=mysqli_fetch_array($qryy)){
	
echo "<div id='candidatesdiv'>"
.$row['first_name']." <br >"
.$row['last_name']."<br >"
.$row['position']."<br > <br>
<i class='fa fa-user-circle-o fa-5x' aria-hidden='true'></i>
<div class='votingsection'>
<form method='POST' action=''>
<input type='hidden' name='submitvotesid'   value='".$row['candidate_id']."'/>
<input type='hidden' name='candfirstname' value='".$row['first_name']."'/>
<input type='hidden' name='positionhidd'  value='".$row['position']."'/>
<input type='submit' name='submitvotes' Value='Vote' />
</form>
</div>
</div>";
}
}
//end select candidates according to select option

mysqli_close($connect);

?>

</div>