<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="This is an example of a meta description.This will often show up in search results.">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="loginbox">
		<img src="img/avatar.png" class="avatar">
			<h1>Login Here</h1>
			<form action="includes/login.inc.php" method="post">
				<p>Username</p>
				<input type="text" name="" placeholder="Enter Username">
				<p>Password</p>
				<input type="password" name="" placeholder="Enter Password">
				<input type="submit" name="login-submit" value="Login"> 
				<a href="forgot.php">Forgot Password</a><br>
				<a href="signup.php">Create New Account</a>
			</form>


	</div>
	<header>
		<nav class="nav-header-main">
			<a class="header-logo" href="index.php">
				<img src="img/lgo3.jpg" alt="logo">
			</a>
			<ul>
				
				<li><a href="about.php">About Us</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="signup.php">Sign Up</a></li>
				<li class="active"><a href="header.php">Login</a></li>
				
				</ul>
				
			
		</nav>
	</header>