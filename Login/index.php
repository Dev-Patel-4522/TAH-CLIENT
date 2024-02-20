<!DOCTYPE html>
<html>
<head>
	
	<title>Login And Registration</title>
	<link rel="icon" href="title.png" type="image/gif">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="global">
	<div class="hero">
		<div class="form-box">
			<img src="logo.png" class="Img">
			<div class="button-box">
				
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Login</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>
			<form id="login" class="input-group" onclick="return myfun()" action="Login.php" method="post">
				<input type="text" class="input-field" placeholder="User Id" name="User" required="">
				<input type="password" class="input-field" placeholder="Enter Password" name="Password" required="">
				<input type="checkbox" class="check-box"><span>Remember me</span>
				<button type="submit" class="submit-btn">Login</button>
			</form>
			<form id="register" class="input-group" onclick="return myfun()" action="Register.php" method="post">
					<input type="text" class="input-field" placeholder="User Id" name="Name" required="">
					<input type="email" class="input-field" placeholder="Email Id" name="Email" required="">
					<input type="text" class="input-field" placeholder="Mobile" name="Mobile" required="">
					<input type="password" class="input-field" placeholder="Password" name="Password" required="">
					<input type="password" class="input-field" placeholder="Confirm" name="Confirm" required="">
					<input type="checkbox" class="check-box"><span>I agree to the terms & condition</span>
					<button type="submit" class="submit-btn">Register</button>
			</form>
	</div>

	<script>
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");

		function register()
		{
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
		}
		function login()
		{
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0";
		}
	</script>
</body>
</html>