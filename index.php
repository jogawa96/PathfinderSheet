
<html>
    <head>
		<title>Home Page</title>
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

<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>