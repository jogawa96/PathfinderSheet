<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pathfinder Character Sheet</title>
		<link rel="stylesheet" href="styles.css">
		<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	</head>

	<body>

		<?php include 'nav.php';?>

		<!-- THE STICKY INCLUDE WILL BE THE BIT THAT STICKS TO A CORNER -->
		<?php include 'sticky.php';?>

		<h1>Offence</h1>
		<form>
			<div class="offence">
				<label>Initiative: </label>
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

		<h1>Defence</h1>
		<form id="defence"> 
			<div class="ac">
				<table id="acnormal">
					<tr>
						<th>AC:</th>
						<td> <input type="text" name="ac" id="ac" readonly> </td>
						<td>= 10 +</td>
						<td><input type="text" name="acarmour" id="acarmour"></td>
						<td><input type="text" name="acshield" id="acshield"></td>
						<td><input type="text" name="acdex" id="acdex" readonly></td>
						<td><input type="text" name="acsize" id="acsize"></td>
						<td><input type="text" name="acnatural" id="acnatural"></td>
						<td><input type="text" name="acdeflection" id="acdeflection"></td>
						<td><input type="text" name="acdodge" id="acdodge"></td>
						<td><input type="text" name="acother" id="acother"></td>
					</tr>
					<tr class="labels">
						<th> </th>
						<th> </th>
						<th> </th>
						<th>Armour</th>
						<th>Shield</th>
						<th>Dex</th>
						<th>Size</th>
						<th>Natural</th>
						<th>Deflection</th>
						<th>Dodge</th>
						<th>Other</th>
					</tr>
				</table>
				<div id="touch">
					<label>Touch: </label>
					<input type="text" name="actouch" id="actouch" readonly>
				</div>
				<div id="flat">
					<label>Flat-Footed: </label>
					<input type="text" name="acflat" id="acflat" readonly>
				</div>
			</div>

			<div class="cmd">
				<label>CMD: </label>
				<input type="text" name="cmd" id="cmd" readonly>
				<span> = 10 + </span>
				<input type="text" name="cmdbab" id="cmdbab">
				<label>BAB</label>
				<input type="text" name="cmdstr" id="cmdstr">
				<label>STR</label>
				<input type="text" name="cmddex" id="cmddex" readonly>
				<label>DEX</label>
				<input type="text" name="cmdsize" id="cmdsize">
				<label>Size</label>
			</div>

			<div class="saves">
				<div class="save">
					<label>Fortitude: </label>
					<input type="text" name="fort" id="fort" readonly>
					<span> = </span>
					<input type="text" name="basefort" id="basefort">
					<label>Base</label>
					<input type="text" name="conmod" id="conmod" readonly>
					<label>CON</label>
					<input type="text" name="fortother" id="fortother">
					<label>Other</label>
				</div>
				<div class="save">
					<label>Reflex: </label>
					<input type="text" name="ref" id="ref" readonly>
					<span> = </span>
					<input type="text" name="baseref" id="baseref">
					<label>Base</label>
					<input type="text" name="dexmod" id="dexmod" readonly>
					<label>DEX</label>
					<input type="text" name="refother" id="refother">
					<label>Other</label>
				</div>
				<div class="save">
					<label>Will: </label>
					<input type="text" name="will" id="will" readonly>
					<span> = </span>
					<input type="text" name="basewill" id="basewill">
					<label>Base</label>
					<input type="text" name="wismod" id="wismod" readonly>
					<label>WIS</label>
					<input type="text" name="willother" id="willother">
					<label>Other</label>
				</div>
			</div>
		</form>

		<script src="updatedef.js"></script>
	</body>
</html>