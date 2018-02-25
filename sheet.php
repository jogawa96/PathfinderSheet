<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pathfinder Character Sheet</title>		
		<link rel="stylesheet" href="styles2.css?<?=time()?>"/>
		<link rel="stylesheet" href="styles.css?<?=time()?>"/>
		<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	</head>

	<body>

		<?php include 'setchar.php';?>
		<?php include 'nav.php';?>
		<?php include 'sticky.php';?>

		<h1>Character Information</h1>
		<?php include "basic.php";?>
		<?php include "statblock.php";?>
		<script src="updatestats.js"></script>

	</body>

</html>
