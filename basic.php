<?php include('server.php'); session_start();
require_once "../config.php";
?>
<form method="post" action="basic.php" class="charinfo">	
			<div class="info">
				<label>Name</label>
				<input type="text" name="charname" id="charname" value="<?php echo $_SESSION['character'];?>" readonly>
			</div>
			<div class="info">
				<label>Class + Level</label>
				<input type="text" name="charlvl" value="<?php echo $_SESSION['charlvl']; ?>">
			</div>
			<div class="info">
				<label>Race</label>
				<input type="text" name="charrace" id="charrace" value="<?php echo $_SESSION['charrace']; ?>">
			</div>
			<div class="info">
				<label>Size</label>
				<input type="text" name="charsize" id="charsize" value="<?php echo $_SESSION['charsize']; ?>">
			</div>
			<div class="info">
				<label>Alignment</label>
				<input type="text" name="charalign" id="charalign" value="<?php echo $_SESSION['charalign']; ?>">
			</div>
			<div class="info">
				<label>Gender</label>
				<input type="text" name="chargender" id="chargender" value="<?php echo $_SESSION['chargender']; ?>">
			</div>
			<div class="info">
				<label>Age</label>
				<input type="text" name="charage" id="charage" value="<?php echo $_SESSION['charage']; ?>">
			</div>
			<div class="info">
				<label>Height</label>
				<input type="text" name="charheight" id="charheight" value="<?php echo $_SESSION['charheight']; ?>">
			</div>
			<div class="info">
				<label>Hair Colour</label>
				<input type="text" name="charhair" id="charhair" value="<?php echo $_SESSION['charhair']; ?>">
			</div>
			<div class="info">
				<label>Eye Colour: </label>
				<input type="text" name="chareyes" id="chareyes" value="<?php echo $_SESSION['chareyes']; ?>">
			</div>

			</div><input type="submit" name="save" class="btn"></div>
		</form>