<?php include('server.php'); session_start(); ?>
<link href="style2.css" rel="stylesheet" />
<aside>
	<form>
		<div class="sidestats">
			<div class="sidephysical">
				<div class="sidestat">
					<label class="lab">STR</label>
					<input class="stat" type="text" name="sidestr" id="sidestr" value="<?php echo $_SESSION['strengthraw'];?>" readonly>
				</div>
				<div class="sidestat">
					<label>DEX</label>
					<input class="stat" type="text" name="sidedex" id="sidedex" value="<?php echo $_SESSION['dexterityraw'];?>" readonly>
				</div>
				<div class="sidestat">
					<label>CON</label>
					<input class="stat" type="text" name="sidecon" id="sidecon" value="<?php echo $_SESSION['constitutionraw'];?>" readonly>
				</div>
			</div>
			<div class="sidemental">
				<div class="sidestat">
					<label>INT</label>
					<input class="stat" type="text" name="sideint" id="sideint" value="<?php echo $_SESSION['intelraw'];?>" readonly>
				</div>
				<div class="sidestat">
					<label>WIS</label>
					<input class="stat" type="text" name="sidewis" id="sidewis" value="<?php echo $_SESSION['wisdomraw'];?>" readonly>
				</div>
				<div class="sidestat">
					<label>CHA</label>
					<input class="stat" type="text" name="sidecha" id="sidecha" value="<?php echo $_SESSION['charismaraw'];?>" readonly>
				</div>
			</div>
		</div>
		<div class="sidehealth">
			<div class="sidestat">
				<label>HP: </label>
				<input class="stat" type="text" name="sidehp" id="sidehp" readonly>
			</div>
			<div class="sidestat">
				<label>Damage: </label>
				<input class="stat" type="text" name="sidedamage" id="sidedamage">
			</div>
		</div>
	</form>
</aside>