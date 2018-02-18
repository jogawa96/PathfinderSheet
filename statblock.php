<?php include('server.php'); session_start(); ?>
<form class="statblock">
	<div class="physical">
		<div class="stat">
			<div class="field">
				<label>STR</label>
				<input type="text" name="strscore" id="strscore" value="<?php echo $_SESSION['strengthraw'];?>" readonly>
			</div>
			<div class="field">
				<label>Mod</label>
				<input type="text" name="strmod" id="strmod" readonly>
			</div>
			<div class="field">
				<label>Temp</label>
				<input type="text" name="strtemp" id="strtemp">
			</div>
			<div class="field">
				<label>Mod</label>
				<input type="text" name="strtempmod" id="strtempmod" readonly>
			</div>
		</div>
		<div class="stat">
			<div class="field">
				<label>DEX</label>
				<input type="text" name="dexscore" id="dexscore" value="<?php echo $_SESSION['dexterityraw'];?>" readonly>
			</div>
			<div class="field">
				<label>Mod</label>
				<input type="text" name="dexmod" id="dexmod" readonly>
			</div>
			<div class="field">
				<label>Temp</label>
				<input type="text" name="dextemp" id="dextemp">
			</div>
			<div class="field">
				<label>Mod</label>
				<input type="text" name="dextempmod" id="dextempmod" readonly>
			</div>
		</div>
		<div class="stat">
			<div class="field">
				<label>CON</label>
				<input type="text" name="conscore" id="conscore" value="<?php echo $_SESSION['constitutionraw'];?>" readonly>
			</div>
			<div class="field">
				<label>Mod</label>
				<input type="text" name="conmod" id="conmod" readonly>
			</div>
			<div class="field">
				<label>Temp</label>
				<input type="text" name="contemp" id="contemp">
			</div>
			<div class="field">
				<label>Mod</label>
				<input type="text" name="contempmod" id="contempmod" readonly>
			</div>
		</div>
	</div>
	<div class="mental">
		<div class="stat">
			<div class="field">
				<label>INT</label>
				<input type="text" name="intscore" id="intscore" value="<?php echo $_SESSION['intelraw'];?>" readonly>
			</div>
			<div class="field">
				<label>Mod</label>
				<input type="text" name="intmod" id="intmod" readonly>
			</div>
			<div class="field">
				<label>Temp</label>
				<input type="text" name="inttemp" id="inttemp">
			</div>
			<div class="field">
				<label>Mod</label>
				<input type="text" name="inttempmod" id="inttempmod" readonly>
			</div>
		</div>
		<div class="stat">
			<div class="field">
				<label>WIS</label>
				<input type="text" name="wisscore" id="wisscore" value="<?php echo $_SESSION['wisdomraw'];?>" readonly>
			</div>
			<div class="field">
				<label>Mod</label>
				<input type="text" name="wismod" id="wismod" readonly>
			</div>
			<div class="field">
				<label>Temp</label>
				<input type="text" name="wistemp" id="wistemp">
			</div>
			<div class="field">
				<label>Mod</label>
				<input type="text" name="wistempmod" id="wistempmod" readonly>
			</div>
		</div>
		<div class="stat">
			<div class="field">
				<label>CHA</label>
				<input type="text" name="chascore" id="chascore" value="<?php echo $_SESSION['charismaraw'];?>" readonly>
			</div>
			<div class="field">
				<label>Mod</label>
				<input type="text" name="chamod" id="chamod" readonly>
			</div>
			<div class="field">
				<label>Temp</label>
				<input type="text" name="chatemp" id="chatemp">
			</div>
			<div class="field">
				<label>Mod</label>
				<input type="text" name="chatempmod" id="chatempmod" readonly>
			</div>
		</div>
	</div>
</form>