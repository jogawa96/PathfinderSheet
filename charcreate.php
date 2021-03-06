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


	<form method="post" action="">
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
        <input type="text" name="dexterityraw" value="<?php echo $dexterityraw; ?>">
		</div>
		<div class="input-group">	
        <label>Raw CON</label>
        <input type="text" name="constitutionraw" value="<?php echo $constitutionraw; ?>">
		</div>
		<div class="input-group">	
        <label>Raw INT</label>
        <input type="text" name="intelraw" value="<?php echo $intelraw; ?>">
		</div>
		<div class="input-group">	
        <label>Raw WIS</label>
        <input type="text" name="wisdomraw" value="<?php echo $wisdomraw; ?>">
		</div>
		<div class="input-group">	
        <label>RAW CHA</label>
        <input type="text" name="charismaraw" value="<?php echo $charismaraw; ?>">
		</div>
        <div class="input-group">	
        <label>RAW STR</label>
        <input type="text" name="strengthraw" value="<?php echo $strengthraw; ?>">
		</div>
        <div class="input-group">
        <button type="submit" name="create" class="btn" >Create New Character</button>
		</div>
    </form>
</div>
	<footer><a href="logout.php">Logout</a></footer>

</body>
</html>
