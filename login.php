<?php 
include('server.php') ;
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" href="styles2.css">
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
</head>
<body id="login">
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group" id="loginusername">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group" id="loginpassword">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
	</form>
	<footer>Not yet a member? <a href="register.php">Sign up</a></footer>
</body>
</html>