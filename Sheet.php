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
		</form>

		<form class="statblock">
			<div class="stat">
				<div class="entry">
					<input type="text" name="strscore" id="strscore">
					<label>STR</label>
				</div>
				<div class="entry">
					<input type="text" name="strmod" id="strmod">
					<label>Mod</label>
				</div>
				<div class="entry">
					<input type="text" name="strtemp" id="strtemp">
					<label>Temp</label>
					</div>
				<div class="entry">
					<input type="text" name="strtempmod" id="strtempmod">
					<label>Mod</label>
				</div>
			</div>
			<div class="stat">
				<div class="entry">
					<input type="text" name="dexscore" id="dexscore">
					<label>DEX</label>
				</div>
				<div class="entry">
					<input type="text" name="dexmod" id="dexmod">
					<label>Mod</label>
				</div>
				<div class="entry">
					<input type="text" name="dextemp" id="dextemp">
					<label>Temp</label>
					</div>
				<div class="entry">
					<input type="text" name="dextempmod" id="dextempmod">
					<label>Mod</label>
				</div>
			</div>
			<div class="stat">
				<div class="entry">
					<input type="text" name="conscore" id="conscore">
					<label>CON</label>
				</div>
				<div class="entry">
					<input type="text" name="conmod" id="conmod">
					<label>Mod</label>
				</div>
				<div class="entry">
					<input type="text" name="contemp" id="contemp">
					<label>Temp</label>
					</div>
				<div class="entry">
					<input type="text" name="contempmod" id="contempmod">
					<label>Mod</label>
				</div>
			</div>
			<div class="stat">
				<div class="entry">
					<input type="text" name="intscore" id="intscore">
					<label>INT</label>
				</div>
				<div class="entry">
					<input type="text" name="intmod" id="intmod">
					<label>Mod</label>
				</div>
				<div class="entry">
					<input type="text" name="inttemp" id="inttemp">
					<label>Temp</label>
					</div>
				<div class="entry">
					<input type="text" name="inttempmod" id="inttempmod">
					<label>Mod</label>
				</div>
			</div>
			<div class="stat">
				<div class="entry">
					<input type="text" name="wisscore" id="wisscore">
					<label>WIS</label>
				</div>
				<div class="entry">
					<input type="text" name="wismod" id="wismod">
					<label>Mod</label>
				</div>
				<div class="entry">
					<input type="text" name="wistemp" id="wistemp">
					<label>Temp</label>
					</div>
				<div class="entry">
					<input type="text" name="wistempmod" id="wistempmod">
					<label>Mod</label>
				</div>
			</div>
			<div class="stat">
				<div class="entry">
					<input type="text" name="chascore" id="chascore">
					<label>CHA</label>
				</div>
				<div class="entry">
					<input type="text" name="chamod" id="chamod">
					<label>Mod</label>
				</div>
				<div class="entry">
					<input type="text" name="chatemp" id="chatemp">
					<label>Temp</label>
					</div>
				<div class="entry">
					<input type="text" name="chatempmod" id="chatempmod">
					<label>Mod</label>
				</div>
			</div>
		</form>

		<form class="backstory">
			<div class="info">
				<label>Backstory</label>
				<textarea name="backstory" id="backstory"></textarea>
			</div>
		</form>
	</body>
</html>