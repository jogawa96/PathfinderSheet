<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pathfinder Character Sheet</title>
	</head>

	<body>

		<?php include 'nav.php';?>

		<!-- THE STICKY INCLUDE WILL BE THE BIT THAT STICKS TO A CORNER -->
		<?php include 'sticky.php';?>

		<h1>Inventory</h1>
		<form>
			<div class="inventory">
				<h2>Money</h2>
				<input type="text" name="gold" id="gold">
				<label>Gold</label>
				<input type="text" name="silver" id="silver">
				<label>Silver</label>
			</div>
			<div class="inventory">
				<h2>Inventory</h2>
				<textarea></textarea>
			</div>
		</form>
	</body>
</html>