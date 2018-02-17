<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pathfinder Character Sheet</title>
		<link rel="stylesheet" href="/css/styles.css">
		<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	</head>

	<body>

		<?php include 'nav.php';?>
		<?php include 'sticky.php';?>

		<h1>Character Information</h1>
		<form class="charinfo">	
			<div class="info">
				<label>Name</label>
				<input type="text" name="charname" id="charname">
			</div>
			<div class="info">
				<label>Class + Level</label>
				<input type="text" name="charclevel" id="charclevel">
			</div>
			<div class="info">
				<label>Race</label>
				<input type="text" name="charrace" id="charrace">
			</div>
			<div class="info">
				<label>Size</label>
				<input type="text" name="charsize" id="charsize">
			</div>
			<div class="info">
				<label>Alignment</label>
				<input type="text" name="charalign" id="charalign">
			</div>
			<div class="info">
				<label>Gender</label>
				<input type="text" name="chargender" id="chargender">
			</div>
			<div class="info">
				<label>Age</label>
				<input type="text" name="charage" id="charage">
			</div>
			<div class="info">
				<label>Height</label>
				<input type="text" name="charheight" id="charheight">
			</div>
			<div class="info">
				<label>Hair Colour</label>
				<input type="text" name="charhair" id="charhair">
			</div>
			<div class="info">
				<label>Eye Colour: </label>
				<input type="text" name="chareyes" id="chareyes">
			</div>

			<div class="statblock">
				<div class="physicalstats"
					<div class="stat">
						<label>STR</label>
						<input type="text" name="strscore" id="strscore">
						<label>Mod</label>
						<input type="text" name="strmod" id="strmod" readonly>
						<label>Temp</label>
						<input type="text" name="strtemp" id="strtemp">
						<label>Mod</label>
						<input type="text" name="strtempmod" id="strtempmod">
					</div>
					<div class="stat">
						<label>DEX</label>
						<input type="text" name="dexscore" id="dexscore">
						<label>Mod</label>
						<input type="text" name="dexmod" id="dexmod" readonly>
						<label>Temp</label>
						<input type="text" name="dextemp" id="dextemp">
						<label>Mod</label>
						<input type="text" name="dextempmod" id="dextempmod">
					</div>
					<div class="stat">
						<label>CON</label>
						<input type="text" name="conscore" id="conscore">
						<label>Mod</label>
						<input type="text" name="conmod" id="conmod" readonly>
						<label>Temp</label>
						<input type="text" name="contemp" id="contemp">
						<label>Mod</label>
						<input type="text" name="contempmod" id="contempmod">
					</div>
				</div>
				<div class="mentalstats">
					<div class="stat">
						<label>INT</label>
						<input type="text" name="intscore" id="intscore">
						<label>Mod</label>
						<input type="text" name="intmod" id="intmod" readonly>
						<label>Temp</label>
						<input type="text" name="inttemp" id="inttemp">
						<label>Mod</label>
						<input type="text" name="inttempmod" id="inttempmod">
					</div>
					<div class="stat">
						<label>WIS</label>
						<input type="text" name="wisscore" id="wisscore">
						<label>Mod</label>
						<input type="text" name="wismod" id="wismod" readonly>
						<label>Temp</label>
						<input type="text" name="wistemp" id="wistemp">
						<label>Mod</label>
						<input type="text" name="wistempmod" id="wistempmod">
					</div>
					<div class="stat">
						<label>CHA</label>
						<input type="text" name="chascore" id="chascore">
						<label>Mod</label>
						<input type="text" name="chamod" id="chamod" readonly>
						<label>Temp</label>
						<input type="text" name="chatemp" id="chatemp">
						<label>Mod</label>
						<input type="text" name="chatempmod" id="chatempmod">
					</div>
				</div>
			</div>

			<div class="info">
				<label>Backstory</label>
				<textarea name="backstory" id="backstory"></textarea>
			</div>
		</form>
	</body>
</html>