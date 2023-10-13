<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<?php
  include "../connection/dbCon.php";
  include 'registration.php';
  ?>
</head>
<body>
	<div class="main-w3layouts wrapper">
		<h1>Creative SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
            <form action="register.php" method="POST">  
                    <input type="number" placeholder="User_ID" class="id" id="id" name="id" required>
                    <input type="text" placeholder="First Name" class="FirstName" id="FirstName" name="FirstName" required />
                    <input type="text" placeholder="Last Name" class="LastName" id="LastName" name="LastName" required />
                    <input type="text" placeholder="Gender" class="gender" id="gender" name="gender" required />
					<input type="text" placeholder="nationality" class="textbox" name="nationality" required />
                    <input type="text" placeholder="Email" class="textbox" name="Email" required />
                    <input type="text" placeholder="username" class="textbox" name="username" required />
                    <input type="password" placeholder="password" class="textbox" name="password" required />
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" id='submit' class='submit' value="SIGNUP">
				</form>
				<p>Don't have an Account? <a href="../login/login.php"> Login Now!</a></p>
			</div>
		</div>
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</form>
</body>
</html>