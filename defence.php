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

		<h1>Defence</h1>
		<form>
			<div class="defence">
				<div id="acnormal">
					<label>AC: </label>
					<input type="text" name="ac" id="ac" readonly>
					<span>= 10 + </span>
					<input type="text" name="acarmour" id="acarmour">
					<label>Armour</label>
					<input type="text" name="acshield" id="acshield">
					<label>Shield</label>
					<input type="text" name="acdex" id="acdex">
					<label>Dexterity</label>
					<input type="text" name="acsize" id="acsize">
					<label>Size</label>
					<input type="text" name="acnatural" id="acnatural">
					<label>Natural</label>
					<input type="text" name="acdeflection" id="acdeflection">
					<label>Deflection</label>
					<input type="text" name="acother" id="acother">
					<label>Other</label>
				</div>
				<div id="actouch">
					<label>Touch: </label>
					<input type="text" name="actouch" id="actouch" readonly>
				</div>
				<div id="acflat">
					<label>Flat-Footed: </label>
					<input type="text" name="acflat" id="acflat" readonly>
				</div>
			</div>
			<div class="defence">
				<label>CMD: </label>
				<input type="text" name="cmd" id="cmd" readonly>
				<span>= 10 + </span>
				<input type="text" name="cmdbab" id="cmdbab">
				<label>BAB</label>
				<input type="text" name="cmdstr" id="cmdstr">
				<label>STR</label>
				<input type="text" name="cmddex" id="cmddex">
				<label>DEX</label>
				<input type="text" name="cmdsize" id="cmdsize">
				<label>Size</label>
			</div>
			<div class="defence">
				<label></label>
				<input type="text" name="" id="">
			</div>
			<div class="defence">
				<label></label>
				<input type="text" name="" id="">
			</div>
			<div class="defence">
				<label></label>
				<input type="text" name="" id="">
			</div>
		</form>
	</body>
</html>