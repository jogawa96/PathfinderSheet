<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
<<<<<<< HEAD
<<<<<<< HEAD
  <link rel="stylesheet" href="PathfinderSheet/css/styles.css">
=======
  <link rel="stylesheet" href="test.css">
>>>>>>> 71b26f6ea1e8bc869328204c3beb7b066e6bf89b
=======
  <link rel="stylesheet" href="test.css">
>>>>>>> 71b26f6ea1e8bc869328204c3beb7b066e6bf89b
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>