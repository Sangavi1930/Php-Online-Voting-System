<!DOCTYPE>
<head> 
	<html>
	<title>Student Online Voting System</title>

	<link rel="stylesheet" href="style.css" type="text/css" / >
	</head>
	<body>
<div id="container">
<div class="header">
		<h2>Student Online Voting System</h2>
	</div>
<div id="loginform">


	<form method="post" action="functions.php">
<input type="text" name="first_name" placeholder="First Name" required/><br /><br />
<input type="text" name="last_name" placeholder="Last Name" required/><br /><br />
<input type="Email" name="email" placeholder="Email" required/><br /><br />
<input type="password" name="password" placeholder="Password" required/><br /><br />
<input type="submit" name="submitregdetails" Value="Register"/><br /><br />

	</form><br /><br />
	Want To Login ? <a href="login.php">Click here</a>
</div>


<footer>
	<p> Student Online Voting System <?php echo Date('Y'); ?> All Rights Reserved</p>
<footer>
	</body>
	</html>