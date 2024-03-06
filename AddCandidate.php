

<div class="addcandidate" >

<form method="post" action="functions.php" >

<input type="text" name="first_name" placeholder="First Name" required/><br /><br />
<input type="text" name="last_name" placeholder="Last Name" required/><br /><br />
<input type="text" name="email" placeholder="Email" required/><br /><br />
<input type="password" name="password" placeholder="Password" required/><br /><br />

<?php
        include("databaseconnect.php");
		$sql = " SELECT * FROM `position` ";
		$qry = mysqli_query($connect, $sql);
        $option = "";
		while($row = mysqli_fetch_array($qry)) {
           $option .= "<option>".$row['Position']."</option>";
		}

	?>

<select name="position">

	<option value="<?php echo $option; ?>" > <?php echo $option; ?></option>
</select><br /><br />
<input type="submit" name="submitAddCandidate" value="Add Candidate"/>
</form>
	</div>

