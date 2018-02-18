<?php
if (isset($_POST['charname'])) {
	$setup = setUpDatabase();
	mysqli_query($setup,"INSERT INTO `character` (`char_name`,`char_class`,`char_race`,`char_size`,`char_alignment`,`char_gender`,`char_age`,`char_

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

			</div><input type="submit" value="Save Data"></div>
		</form>
