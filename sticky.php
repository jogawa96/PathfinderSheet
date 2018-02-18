<?php include('server.php'); session_start(); ?>
<aside>
	<form>
		<div class="sidestats">
			<div class="sidephysical">
				<div class="sidestat">
					<label class="lab">STR</label>
					<input type="text" name="sidestr" id="sidestr" readonly>
				</div>
				<div class="sidestat">
					<label>DEX</label>
					<input type="text" name="sidedex" id="sidedex" readonly>
				</div>
				<div class="sidestat">
					<label>CON</label>
					<input type="text" name="sidecon" id="sidecon" readonly>
				</div>
			</div>
			<div class="sidemental">
				<div class="sidestat">
					<label>INT</label>
					<input type="text" name="sideint" id="sideint" readonly>
				</div>
				<div class="sidestat">
					<label>WIS</label>
					<input type="text" name="sidewis" id="sidewis" readonly>
				</div>
				<div class="sidestat">
					<label>CHA</label>
					<input type="text" name="sidecha" id="sidecha" readonly>
				</div>
			</div>
		</div>
		<div class="sidehealth">
			<div class="sidestat">
				<label>HP: </label>
				<input type="text" name="sidehp" id="sidehp" readonly>
			</div>
			<div class="sidestat">
				<label>Damage: </label>
				<input type="text" name="sidedamage" id="sidedamage">
			</div>
		</div>
	</form>
</aside>