require "config.php"
<?php
if (isset($_POST['charname'])) {
	$setup = setUpDatabase();
	mysqli_query($setup,"INSERT INTO `character` (`char_name`,`char_class`,`char_race`,`char_size`,`char_alignment`,`char_gender`,`char_age`,`char_height`,`char`char_hair`,`char_eye`,`char_bio`,`strength_raw`,`strength_temp`,`dexterity_raw`,`dexterity_temp`,`constitution_raw`,`constitution_temp`,`intel_raw`,`intel_temp`,`char_hair`,`char_eye`,`char_bio`,`strength_raw`,`strength_temp`,`dexterity_raw`,`dexterity_temp`,`constitution_raw`,`constitution_temp`,`intel_raw`,`intel_temp`,_hair`,`char_eye`,`char_bio`,`strength_raw`,`strength_temp`,`dexterity_raw`,`dexterity_temp`,`constitution_raw`,`constitution_temp`,`intel_raw`,`intel_temp`,`wisdom_raw`,`wisdom_temp`,`charisma_raw`,`charisma_temp`) VALUES ('"
		.mysqli_real_escape_string($setup,$_POST["charname"])
		."', '"
		.mysqli_real_escape_string($setup,$_POST["charclevel"])
		."','"
		.mysqli_real_escape_string($setup, $_POST["charrace"])
		."','"
		.mysqli_real_escape_string($setup,$_POST["charsize"])
		."','"
		.mysqli_real_escape_string($setup,$_POST["charalign"])
		."','"
		.mysqli_real_escape_string($setup,$_POST["chargender"])
		."','"
		.mysqli_real_escape_string($setup,$_POST["charage"])
		."','"
		.mysqli_real_escape_string($setup,$_POST["charheight"])
		."','"
		.mysqli_real_escape_string($setup,$_POST["charhair"])
		."','"
		.mysqli_real_escape_string($setup,$_POST["chareyes"])
		."')") or die ("FAILURE AT QUERY 1: ".mysqli_error($setup));


}
end
?>
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
