

<div class="viewcandidate" >

<?php
        include("databaseconnect.php");
		$sql = " SELECT * FROM `position` ";
		$qry = mysqli_query($connect, $sql);
        $position = "";
		while($row = mysqli_fetch_array($qry)) {
          $position .= "<li>".$row['Position']."</li>";
		}

	?>
<ul class="listCandidates"><?php echo $position ; ?></ul>
	</div>
