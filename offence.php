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

		<h1>Offence</h1>
		<form>
			<div class="offence">
				<label>Inititive: </label>
				<input type="text" name="init" id="init">
			</div>
			<div class="offence">
				<label>Base Attack Bonus: </label>
				<input type="text" name="bab" id="bab">
			</div>

			<h2>Weapon Attacks</h2>
				<div class="offence weaponattack">
					<label>Weapon: </label>
					<input type="text" name="weapon1" id="weapon1">
					<label>Bonus: </label>
					<input type="text" name="bonus1" id="bonus1">
					<label>Damage: </label>
					<input type="text" name="damage1" id="damage1">
					<label>Special: </label>
					<input type="text" name="special1" id="special1">
				</div>
		</form>
	</body>
</html>