<?php include('server.php'); session_start(); ?>
<html>
    <head>
		<title>Home Page</title>
		<link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="test.css">
		<link rel="stylesheet" href="test.css">
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

	<form method="post" action="index.php">
    <!-- VALIDATION ERRORS -->
    <?php include('errors.php'); ?>
	<h3> Base Character Design </h3>
        <div class="input-group">	
        <label>Character Name</label>
        <input type="text" name="charname" value="<?php echo $charname; ?>">
		</div>
		<h3> Base Character Stats</h3>
		<div class="input-group">	
        <label>Raw DEX</label>
        <input type="text" name="dexterity_raw" value="<?php echo $dexterityraw; ?>">
		</div>
		<div class="input-group">	
        <label>Raw CON</label>
        <input type="text" name="constitution_raw" value="<?php echo $constitutionraw; ?>">
		</div>
		<div class="input-group">	
        <label>Raw INT</label>
        <input type="text" name="intel_raw" value="<?php echo $intelraw; ?>">
		</div>
		<div class="input-group">	
        <label>Raw WIS</label>
        <input type="text" name="wisdom_raw" value="<?php echo $wisdomraw; ?>">
		</div>
		<div class="input-group">	
        <label>RAW CHA</label>
        <input type="text" name="charisma_raw" value="<?php echo $charismaraw; ?>">
		</div>
        <div class="input-group">	
        <label>RAW STR</label>
        <input type="text" name="strength_raw" value="<?php echo $strengthraw; ?>">
		</div>
        <div class="input-group">
        <button type="submit" name="create" class="btn" >Create New Character</button>
		</div>
		
    </form>
</div>
		
</body>
</html>