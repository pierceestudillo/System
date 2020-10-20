<?php
	require "header.php";
?>
    <link rel="stylesheet" href="signup-style.css"> 
	<main>
		<div class="signup-form">
		<img src="img/avatar.png" class="avatar">
		<h1>Sign up</h1>
		<form action="includes/signup.inc.php" method="post">
			<p>Username</p>
			<input type="text" name="uid" placeholder="Username">
			<p>E-mail</p>
			<input type="text" name="mail" placeholder="E-mail">
			<p>Password</p>
			<input type="password" name="pwd" placeholder="Password">
			<p>Repeat Password</p>
			<input type="password" name="pwdrepeat" placeholder="Repeat Password">
			<input type="submit" name="signup-submit" value="Sign up">
			
	</form>
</div>
	</main>

<?php
	require "footer.php";
?>