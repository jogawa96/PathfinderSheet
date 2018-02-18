<?php include('server.php'); session_start();
require_once "../config.php";
?>
<form method="post" action="basic.php" class="charinfo">	
			<div class="info">
				<label>Name</label>
				<input type="text" name="charname" id="charname" value=$_SESSION['character']>
			</div>
			<div class="info">
				<label>Class + Level</label>
				<input type="text" name="charclevel" id="charclevel" value="<?php echo $charlvl; ?>">
			</div>
			<div class="info">
				<label>Race</label>
				<input type="text" name="charrace" id="charrace" value="<?php echo $charrace; ?>">
			</div>
			<div class="info">
				<label>Size</label>
				<input type="text" name="charsize" id="charsize" value="<?php echo $charsize; ?>">
			</div>
			<div class="info">
				<label>Alignment</label>
				<input type="text" name="charalign" id="charalign" value="<?php echo $charalign; ?>">
			</div>
			<div class="info">
				<label>Gender</label>
				<input type="text" name="chargender" id="chargender" value="<?php echo $chargender; ?>">
			</div>
			<div class="info">
				<label>Age</label>
				<input type="text" name="charage" id="charage" value="<?php echo $charage; ?>">
			</div>
			<div class="info">
				<label>Height</label>
				<input type="text" name="charheight" id="charheight" value="<?php echo $charheight; ?>">
			</div>
			<div class="info">
				<label>Hair Colour</label>
				<input type="text" name="charhair" id="charhair" value="<?php echo $charhair; ?>">
			</div>
			<div class="info">
				<label>Eye Colour: </label>
				<input type="text" name="chareyes" id="chareyes" value="<?php echo $chareyes; ?>">
			</div>

			</div><input type="submit" name="Save" value="Save Data"></div>
		</form>