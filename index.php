<?php include('server.php'); session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="styles2.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
	<?php endif ?>

	<!-- trying to pull this user's characters from the database-->
	<?php include 'charpull.php' ?>


	<footer>
	<button onclick="location.href='charcreate.php'" type="button">Create New Character</button>

		<a href="logout.php">Logout</a>
	</footer>

</body>
</html>