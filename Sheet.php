<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pathfinder Character Sheet</title>
	</head>

	<body>

		<?php include 'nav.php';?>
		<?php include 'sticky.php';?>

		<h1>Character Information</h1>
		<form>	
			<div class="info">
				<label>Name: </label>
				<input type="text" name="charname" id="charname">
			</div>
			<div class="info">
				<label>Class + Level: </label>
				<input type="text" name="charclevel" id="charclevel">
			</div>
			<div class="info">
				<label>Race: </label>
				<input type="text" name="charrace" id="charrace">
			</div>
			<div class="info">
				<label>Size: </label>
				<input type="text" name="charsize" id="charsize">
			</div>
			<div class="info">
				<label>Alignment</label>
				<input type="text" name="charalign" id="charalign">
			</div>
			<div class="info">
				<label>Gender: </label>
				<input type="text" name="chargender" id="chargender">
			</div>
			<div class="info">
				<label>Age: </label>
				<input type="text" name="charage" id="charage">
			</div>
			<div class="info">
				<label>Height: </label>
				<input type="text" name="charheight" id="charheight">
			</div>
			<div class="info">
				<label>Hair Colour: </label>
				<input type="text" name="charhair" id="charhair">
			</div>
			<div class="info">
				<label>Eye Colour: </label>
				<input type="text" name="chareyes" id="chareyes">
			</div>
			<div class="info">
				<label>Backstory</label>
				<textarea></textarea>
		</form>
	</body>
</html>