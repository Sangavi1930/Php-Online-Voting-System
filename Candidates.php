

<div class="viewcandidate" >

<?php
        include("databaseconnect.php");
		$sql = " SELECT * FROM `candidates` ";
		$qry = mysqli_query($connect, $sql);
        $candidates = "";
		while($row = mysqli_fetch_array($qry)) {
          $candidates .= "<li>".$row['first_name']. " " .$row['last_name']."</li>";
		}

	?>
<ul class="listCandidates"><?php echo $candidates ; ?></ul>
	</div>
