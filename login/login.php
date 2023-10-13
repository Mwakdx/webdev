<!DOCTYPE html>
<html>
<head>
<?php
  include "../connection/dbCon.php";
    ?>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>

			<div class="login">
				<form action="loginprocess.php" method="POST">
					<label>Login</label>
                    <input type="text" placeholder="Username" id="username" name="username">
					<input type="password" placeholder="Password" id="password" name="password">
					<button type="submit" name="login">Log In</button>
                    <a href="../Register/register.php" class="register-button"><center>Register</center></a>
				</form>
			</div>
	</div>
</body>
</html>