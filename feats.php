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

		<h1>Feats</h1>
		<form>
			<div class="features">
				<label>Feats</label>
				<textarea name="feats" id="feats"></textarea>
			</div>
			<div class="racefeatures">
				<label>Race Features</label>
				<textarea name="racefeatures" id="racefeatures"></textarea>
			</div>
			<div class="classfeatures">
				<label>Class Features</label>
				<textarea name="classfeatures" id="classfeatures"></textarea>
			</div>
		</form>
	</body>
</html>