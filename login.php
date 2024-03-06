<!DOCTYPE html>
<html>
<head> 
    <title>Student Online Voting System</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css" type="text/css" />
</head>
<body>
<div id="container">
    <div class="header">
        <h2>Student Online Voting System</h2>
    </div>
    <div id="loginform">
        <form method="post" action="functions.php">
            <i class="fa fa-user-o" aria-hidden="true"></i>
            <input type="text" name="regno" placeholder="RegNo ie DIT-02-0442/2015" required/><br /><br />
            <i class="fa fa-user-secret" aria-hidden="true"></i>
            <input type="password" name="password" placeholder="Password" required/><br /><br />
            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
            <select name="type">
                <option value="Student">Student</option>
                <option value="Admin">Admin</option>
            </select><br /><br />
            <i class="fa fa-check" aria-hidden="true"></i>
            <input type="submit" name="submitlogindetails" Value="Login"/>
        </form><br /><br />
    </div>
    
</div>
</body>
</html>
