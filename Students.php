

<div class="viewcandidate" >

<?php
        include("databaseconnect.php");
		$sql = " SELECT * FROM `members` ";
		$qry = mysqli_query($connect, $sql);
        $members = "";
		while($row = mysqli_fetch_array($qry)) {
          $members .= "<li>".$row['first_name']. " " .$row['last_name']."</li>";
		}

	?>
<ul class="listCandidates"><?php echo $members ; ?></ul>
	</div>
