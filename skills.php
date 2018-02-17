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

		<h1>Skills</h1>
		<form>
			<table>
				<tr>
					<th></th>
					<th>Skill</th>
					<th>Total</th>
					<th>Ability</th>
					<th>Ranks</th>
					<th>Class</th>
					<th>Racial</th>
					<th>Other</th>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="acrocheck" id="acrocheck"> </td>
					<td>Acrobatics</td>
					<td> <input type="text" class="skilltotal" name="acrototal" id="acrototal" readonly> </td>
					<td> <input type="text" class="dexmod" name="acromod" id="acromod"</td>
					<td> <input type="text" class="ranks" name="acroranks" id="acroranks"> </td>
					<td> <input type="text" class="clskill" name="acrothree" id="acrothree"></td>
					<td> <input type="text" class="racial" name="acrorace" id="acrorace"> </td>
					<td> <input type="text" class="other" name="acroother" id="acroother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="appraisecheck" id="appraisecheck"> </td>
					<td>Appraise</td>
					<td> <input type="text" class="skilltotal" name="appraisetotal" id="appraisetotal" readonly> </td>
					<td> <input type="text" class="intmod" name="appraisemod" id="appraisemod"></td>
					<td> <input type="text" class="ranks" name="appraiseranks" id="appraiseranks"> </td>
					<td> <input type="text" class="clskill" name="appraisethree" id="appraisethree"></td>
					<td> <input type="text" class="racial" name="appraiserace" id="appraiserace"> </td>
					<td> <input type="text" class="other" name="appraiseother" id="appraiseother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="artistrycheck" id="artistrycheck"> </td>
					<td>Artistry</td>
					<td> <input type="text" class="skilltotal" name="artistrytotal" id="artistrytotal" readonly> </td>
					<td> <input type="text" class="chamod" name="artistrymod" id="artistrymod"></td>
					<td> <input type="text" class="ranks" name="artistryranks" id="artistryranks"> </td>
					<td> <input type="text" class="clskill" name="artistrythree" id="artistrythree"></td>
					<td> <input type="text" class="racial" name="artistryrace" id="artistryrace"> </td>
					<td> <input type="text" class="other" name="artistryother" id="artistryother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="autocheck" id="autocheck"> </td>
					<td>Autohypnosis</td>
					<td> <input type="text" class="skilltotal" name="autototal" id="autototal" readonly> </td>
					<td> <input type="text" class="wismod" name="automod" id="automod"></td>
					<td> <input type="text" class="ranks" name="autoranks" id="autoranks"> </td>
					<td> <input type="text" class="clskill" name="autothree" id="autothree"></td>
					<td> <input type="text" class="racial" name="autorace" id="autorace"> </td>
					<td> <input type="text" class="other" name="autoother" id="autoother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="bluffcheck" id="bluffcheck"> </td>
					<td>Bluff</td>
					<td> <input type="text" class="skilltotal" name="blufftotal" id="blufftotal" readonly> </td>
					<td> <input type="text" class="chamod" name="bluffmod" id="bluffmod"></td>
					<td> <input type="text" class="ranks" name="bluffranks" id="bluffranks"> </td>
					<td> <input type="text" class="clskill" name="bluffthree" id="bluffthree"></td>
					<td> <input type="text" class="racial" name="bluffrace" id="bluffrace"> </td>
					<td> <input type="text" class="other" name="bluffother" id="bluffother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="climbcheck" id="climbcheck"> </td>
					<td>Climb</td>
					<td> <input type="text" class="skilltotal" name="climbtotal" id="climbtotal" readonly> </td>
					<td> <input type="text" class="strmod" name="climbmod" id="climbmod"></td>
					<td> <input type="text" class="ranks" name="climbranks" id="climbranks"> </td>
					<td> <input type="text" class="clskill" name="climbthree" id="climbthree"></td>
					<td> <input type="text" class="racial" name="climbrace" id="climbrace"> </td>
					<td> <input type="text" class="other" name="climbother" id="climbother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="craftcheck" id="craftcheck"> </td>
					<td>Craft</td>
					<td> <input type="text" class="skilltotal" name="crafttotal" id="crafttotal" readonly> </td>
					<td> <input type="text" class="intmod" name="craftmod" id="craftmod"></td>
					<td> <input type="text" class="ranks" name="craftranks" id="craftranks"> </td>
					<td> <input type="text" class="clskill" name="craftthree" id="craftthree"></td>
					<td> <input type="text" class="racial" name="craftrace" id="craftrace"> </td>
					<td> <input type="text" class="other" name="craftother" id="craftother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="dipcheck" id="dipcheck"> </td>
					<td>Diplomacy</td>
					<td> <input type="text" class="skilltotal" name="diptotal" id="diptotal" readonly> </td>
					<td> <input type="text" class="chamod" name="dipmod" id="dipmod"></td>
					<td> <input type="text" class="ranks" name="dipranks" id="dipranks"> </td>
					<td> <input type="text" class="clskill" name="dipthree" id="dipthree"></td>
					<td> <input type="text" class="racial" name="diprace" id="diprace"> </td>
					<td> <input type="text" class="other" name="dipother" id="dipother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="ddcheck" id="ddcheck"> </td>
					<td>Disable Device</td>
					<td> <input type="text" class="skilltotal" name="ddtotal" id="ddtotal" readonly> </td>
					<td> <input type="text" class="dexmod" name="ddmod" id="ddmod"></td>
					<td> <input type="text" class="ranks" name="ddranks" id="ddranks"> </td>
					<td> <input type="text" class="clskill" name="ddthree" id="ddthree"></td>
					<td> <input type="text" class="racial" name="ddrace" id="ddrace"> </td>
					<td> <input type="text" class="other" name="ddother" id="ddother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="disguisecheck" id="disguisecheck"> </td>
					<td>Disguise</td>
					<td> <input type="text" class="skilltotal" name="disguisetotal" id="disguisetotal" readonly> </td>
					<td> <input type="text" class="chamod" name="disguisemod" id="disguisemod"></td>
					<td> <input type="text" class="ranks" name="disguiseranks" id="disguiseranks"> </td>
					<td> <input type="text" class="clskill" name="disguisethree" id="disguisethree"></td>
					<td> <input type="text" class="racial" name="disguiserace" id="disguiserace"> </td>
					<td> <input type="text" class="other" name="disguiseother" id="disguiseother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="eacheck" id="eacheck"> </td>
					<td>Escape Artist</td>
					<td> <input type="text" class="skilltotal" name="eatotal" id="eatotal" readonly> </td>
					<td> <input type="text" class="dexmod" name="eamod" id="eamod"></td>
					<td> <input type="text" class="ranks" name="earanks" id="earanks"> </td>
					<td> <input type="text" class="clskill" name="eathree" id="eathree"></td>
					<td> <input type="text" class="racial" name="earace" id="earace"> </td>
					<td> <input type="text" class="other" name="eaother" id="eaother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="flycheck" id="flycheck"> </td>
					<td>Fly</td>
					<td> <input type="text" class="skilltotal" name="flytotal" id="flytotal" readonly> </td>
					<td> <input type="text" class="dexmod" name="flymod" id="flymod"></td>
					<td> <input type="text" class="ranks" name="flyranks" id="flyranks"> </td>
					<td> <input type="text" class="clskill" name="flythree" id="flythree"></td>
					<td> <input type="text" class="racial" name="flyrace" id="flyrace"> </td>
					<td> <input type="text" class="other" name="flyother" id="flyother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="hacheck" id="hacheck"> </td>
					<td>Handle Animal</td>
					<td> <input type="text" class="skilltotal" name="hatotal" id="hatotal" readonly> </td>
					<td> <input type="text" class="chamod" name="hamod" id="hamod"></td>
					<td> <input type="text" class="ranks" name="haranks" id="haranks"> </td>
					<td> <input type="text" class="clskill" name="hathree" id="hathree"></td>
					<td> <input type="text" class="racial" name="harace" id="harace"> </td>
					<td> <input type="text" class="other" name="haother" id="haother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="healcheck" id="healcheck"> </td>
					<td>Heal</td>
					<td> <input type="text" class="skilltotal" name="healtotal" id="healtotal" readonly> </td>
					<td> <input type="text" class="wismod" name="healmod" id="healmod"></td>
					<td> <input type="text" class="ranks" name="healranks" id="healranks"> </td>
					<td> <input type="text" class="clskill" name="healthree" id="healthree"></td>
					<td> <input type="text" class="racial" name="healrace" id="healrace"> </td>
					<td> <input type="text" class="other" name="healother" id="healother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="intimcheck" id="intimcheck"> </td>
					<td>Intimidate</td>
					<td> <input type="text" class="skilltotal" name="intimtotal" id="intimtotal" readonly> </td>
					<td> <input type="text" class="chamod" name="intimmod" id="intimmod"></td>
					<td> <input type="text" class="ranks" name="intimranks" id="intimranks"> </td>
					<td> <input type="text" class="clskill" name="intimthree" id="intimthree"></td>
					<td> <input type="text" class="racial" name="intimrace" id="intimrace"> </td>
					<td> <input type="text" class="other" name="intimother" id="intimother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="arcanacheck" id="arcanacheck"> </td>
					<td>Knowledge (Arcana)</td>
					<td> <input type="text" class="skilltotal" name="arcanatotal" id="arcanatotal" readonly> </td>
					<td> <input type="text" class="intmod" name="arcanamod" id="arcanamod"></td>
					<td> <input type="text" class="ranks" name="arcanaranks" id="arcanaranks"> </td>
					<td> <input type="text" class="clskill" name="arcanathree" id="arcanathree"></td>
					<td> <input type="text" class="racial" name="arcanarace" id="arcanarace"> </td>
					<td> <input type="text" class="other" name="arcanaother" id="arcanaother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="dungeoncheck" id="dungeoncheck"> </td>
					<td>Knowledge (Dungeoneering)</td>
					<td> <input type="text" class="skilltotal" name="dungeontotal" id="dungeontotal" readonly> </td>
					<td> <input type="text" class="intmod" name="dungeonmod" id="dungeonmod"></td>
					<td> <input type="text" class="ranks" name="dungeonranks" id="dungeonranks"> </td>
					<td> <input type="text" class="clskill" name="dungeonthree" id="dungeonthree"></td>
					<td> <input type="text" class="racial" name="dungeonrace" id="dungeonrace"> </td>
					<td> <input type="text" class="other" name="dungeonother" id="dungeonother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="engincheck" id="engincheck"> </td>
					<td>Knowledge (Engineering)</td>
					<td> <input type="text" class="skilltotal" name="engintotal" id="engintotal" readonly> </td>
					<td> <input type="text" class="intmod" name="enginmod" id="enginmod"></td>
					<td> <input type="text" class="ranks" name="enginranks" id="enginranks"> </td>
					<td> <input type="text" class="clskill" name="enginthree" id="enginthree"></td>
					<td> <input type="text" class="racial" name="enginrace" id="enginrace"> </td>
					<td> <input type="text" class="other" name="enginother" id="enginother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="geocheck" id="geocheck"> </td>
					<td>Knowledge (Geography)</td>
					<td> <input type="text" class="skilltotal" name="geototal" id="geototal" readonly> </td>
					<td> <input type="text" class="intmod" name="geomod" id="geomod"></td>
					<td> <input type="text" class="ranks" name="georanks" id="georanks"> </td>
					<td> <input type="text" class="clskill" name="geothree" id="geothree"></td>
					<td> <input type="text" class="racial" name="georace" id="georace"> </td>
					<td> <input type="text" class="other" name="geoother" id="geoother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="historycheck" id="historycheck"> </td>
					<td>Knowledge (History)</td>
					<td> <input type="text" class="skilltotal" name="historytotal" id="historytotal" readonly> </td>
					<td> <input type="text" class="intmod" name="historymod" id="historymod"></td>
					<td> <input type="text" class="ranks" name="historyranks" id="historyranks"> </td>
					<td> <input type="text" class="clskill" name="historythree" id="historythree"></td>
					<td> <input type="text" class="racial" name="historyrace" id="historyrace"> </td>
					<td> <input type="text" class="other" name="historyother" id="historyother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="localcheck" id="localcheck"> </td>
					<td>Knowledge (Local)</td>
					<td> <input type="text" class="skilltotal" name="localtotal" id="localtotal" readonly> </td>
					<td> <input type="text" class="intmod" name="localmod" id="localmod"></td>
					<td> <input type="text" class="ranks" name="localranks" id="localranks"> </td>
					<td> <input type="text" class="clskill" name="localthree" id="localthree"></td>
					<td> <input type="text" class="racial" name="localrace" id="localrace"> </td>
					<td> <input type="text" class="other" name="localother" id="localother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="martialcheck" id="martialcheck"> </td>
					<td>Knowledge (Martial)</td>
					<td> <input type="text" class="skilltotal" name="martialtotal" id="martialtotal" readonly> </td>
					<td> <input type="text" class="intmod" name="martialmod" id="martialmod"></td>
					<td> <input type="text" class="ranks" name="martialranks" id="martialranks"> </td>
					<td> <input type="text" class="clskill" name="martialthree" id="martialthree"></td>
					<td> <input type="text" class="racial" name="martialrace" id="martialrace"> </td>
					<td> <input type="text" class="other" name="martialother" id="martialother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="nobilitycheck" id="nobilitycheck"> </td>
					<td>Knowledge (Nobility)</td>
					<td> <input type="text" class="skilltotal" name="nobilitytotal" id="nobilitytotal" readonly> </td>
					<td> <input type="text" class="intmod" name="nobilitymod" id="nobilitymod"></td>
					<td> <input type="text" class="ranks" name="nobilityranks" id="nobilityranks"> </td>
					<td> <input type="text" class="clskill" name="nobilitythree" id="nobilitythree"></td>
					<td> <input type="text" class="racial" name="nobilityrace" id="nobilityrace"> </td>
					<td> <input type="text" class="other" name="nobilityother" id="nobilityother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="planescheck" id="planescheck"> </td>
					<td>Knowledge (Planes)</td>
					<td> <input type="text" class="skilltotal" name="planestotal" id="planestotal" readonly> </td>
					<td> <input type="text" class="intmod" name="planesmod" id="planesmod"></td>
					<td> <input type="text" class="ranks" name="planesranks" id="planesranks"> </td>
					<td> <input type="text" class="clskill" name="planesthree" id="planesthree"></td>
					<td> <input type="text" class="racial" name="planesrace" id="planesrace"> </td>
					<td> <input type="text" class="other" name="planesother" id="planesother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="psicheck" id="psicheck"> </td>
					<td>Knowledge (Psionics)</td>
					<td> <input type="text" class="skilltotal" name="psitotal" id="psitotal" readonly> </td>
					<td> <input type="text" class="intmod" name="mod" id="mod"></td>
					<td> <input type="text" class="ranks" name="psiranks" id="psiranks"> </td>
					<td> <input type="text" class="clskill" name="psithree" id="psithree"></td>
					<td> <input type="text" class="racial" name="psirace" id="psirace"> </td>
					<td> <input type="text" class="other" name="psiother" id="psiother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="relcheck" id="relcheck"> </td>
					<td>Knowledge (Religion)</td>
					<td> <input type="text" class="skilltotal" name="reltotal" id="reltotal" readonly> </td>
					<td> <input type="text" class="intmod" name="relmod" id="relmod"></td>
					<td> <input type="text" class="ranks" name="relranks" id="relranks"> </td>
					<td> <input type="text" class="clskill" name="relthree" id="relthree"></td>
					<td> <input type="text" class="racial" name="relrace" id="relrace"> </td>
					<td> <input type="text" class="other" name="relother" id="relother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="lincheck" id="lincheck"> </td>
					<td>Linguistics</td>
					<td> <input type="text" class="skilltotal" name="lintotal" id="lintotal" readonly> </td>
					<td> <input type="text" class="intmod" name="linmod" id="linmod"></td>
					<td> <input type="text" class="ranks" name="linranks" id="linranks"> </td>
					<td> <input type="text" class="clskill" name="linthree" id="linthree"></td>
					<td> <input type="text" class="racial" name="linrace" id="linrace"> </td>
					<td> <input type="text" class="other" name="linother" id="linother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="lorecheck" id="lorecheck"> </td>
					<td>Lore</td>
					<td> <input type="text" class="skilltotal" name="loretotal" id="loretotal" readonly> </td>
					<td> <input type="text" class="intmod" name="loremod" id="loremod"></td>
					<td> <input type="text" class="ranks" name="loreranks" id="loreranks"> </td>
					<td> <input type="text" class="clskill" name="lorethree" id="lorethree"></td>
					<td> <input type="text" class="racial" name="lorerace" id="lorerace"> </td>
					<td> <input type="text" class="other" name="loreother" id="loreother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="perccheck" id="perccheck"> </td>
					<td>Perception</td>
					<td> <input type="text" class="skilltotal" name="perctotal" id="perctotal" readonly> </td>
					<td> <input type="text" class="wismod" name="percmod" id="percmod"></td>
					<td> <input type="text" class="ranks" name="percranks" id="percranks"> </td>
					<td> <input type="text" class="clskill" name="percthree" id="percthree"></td>
					<td> <input type="text" class="racial" name="percrace" id="percrace"> </td>
					<td> <input type="text" class="other" name="percother" id="percother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="performcheck" id="performcheck"> </td>
					<td>Perform</td>
					<td> <input type="text" class="skilltotal" name="performtotal" id="performtotal" readonly> </td>
					<td> <input type="text" class="chamod" name="performmod" id="performmod"></td>
					<td> <input type="text" class="ranks" name="performranks" id="performranks"> </td>
					<td> <input type="text" class="clskill" name="performthree" id="performthree"></td>
					<td> <input type="text" class="racial" name="performrace" id="performrace"> </td>
					<td> <input type="text" class="other" name="performother" id="performother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="profcheck" id="profcheck"> </td>
					<td>Profession</td>
					<td> <input type="text" class="skilltotal" name="proftotal" id="proftotal" readonly> </td>
					<td> <input type="text" class="wismod" name="profmod" id="profmod"></td>
					<td> <input type="text" class="ranks" name="profranks" id="profranks"> </td>
					<td> <input type="text" class="clskill" name="profthree" id="profthree"></td>
					<td> <input type="text" class="racial" name="profrace" id="profrace"> </td>
					<td> <input type="text" class="other" name="profother" id="profother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="ridecheck" id="ridecheck"> </td>
					<td>Ride</td>
					<td> <input type="text" class="skilltotal" name="ridetotal" id="ridetotal" readonly> </td>
					<td> <input type="text" class="dexmod" name="ridemod" id="ridemod"></td>
					<td> <input type="text" class="ranks" name="rideranks" id="rideranks"> </td>
					<td> <input type="text" class="clskill" name="ridethree" id="ridethree"></td>
					<td> <input type="text" class="racial" name="riderace" id="riderace"> </td>
					<td> <input type="text" class="other" name="rideother" id="rideother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="smcheck" id="smcheck"> </td>
					<td>Sense Motive</td>
					<td> <input type="text" class="skilltotal" name="smtotal" id="smtotal" readonly> </td>
					<td> <input type="text" class="wismod" name="smmod" id="smmod"></td>
					<td> <input type="text" class="ranks" name="smranks" id="smranks"> </td>
					<td> <input type="text" class="clskill" name="smthree" id="smthree"></td>
					<td> <input type="text" class="racial" name="smrace" id="smrace"> </td>
					<td> <input type="text" class="other" name="smother" id="smother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="sohcheck" id="sohcheck"> </td>
					<td>Sleight of Hand</td>
					<td> <input type="text" class="skilltotal" name="sohtotal" id="sohtotal" readonly> </td>
					<td> <input type="text" class="dexmod" name="sohmod" id="sohmod"></td>
					<td> <input type="text" class="ranks" name="sohranks" id="sohranks"> </td>
					<td> <input type="text" class="clskill" name="sohthree" id="sohthree"></td>
					<td> <input type="text" class="racial" name="sohrace" id="sohrace"> </td>
					<td> <input type="text" class="other" name="sohother" id="sohother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="sccheck" id="sccheck"> </td>
					<td>Spellcraft</td>
					<td> <input type="text" class="skilltotal" name="sctotal" id="sctotal" readonly> </td>
					<td> <input type="text" class="intmod" name="scmod" id="scmod"></td>
					<td> <input type="text" class="ranks" name="scranks" id="scranks"> </td>
					<td> <input type="text" class="clskill" name="scthree" id="scthree"></td>
					<td> <input type="text" class="racial" name="scrace" id="scrace"> </td>
					<td> <input type="text" class="other" name="scother" id="scother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="stealthcheck" id="stealthcheck"> </td>
					<td>Stealth</td>
					<td> <input type="text" class="skilltotal" name="stealthtotal" id="stealthtotal" readonly> </td>
					<td> <input type="text" class="dexmod" name="stealthmod" id="stealthmod"></td>
					<td> <input type="text" class="ranks" name="stealthranks" id="stealthranks"> </td>
					<td> <input type="text" class="clskill" name="stealththree" id="stealththree"></td>
					<td> <input type="text" class="racial" name="stealthrace" id="stealthrace"> </td>
					<td> <input type="text" class="other" name="stealthother" id="stealthother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="survcheck" id="survcheck"> </td>
					<td>Survival</td>
					<td> <input type="text" class="skilltotal" name="survtotal" id="survtotal" readonly> </td>
					<td> <input type="text" class="wismod" name="survmod" id="survmod"></td>
					<td> <input type="text" class="ranks" name="survranks" id="survranks"> </td>
					<td> <input type="text" class="clskill" name="survthree" id="survthree"></td>
					<td> <input type="text" class="racial" name="survrace" id="survrace"> </td>
					<td> <input type="text" class="other" name="survother" id="survother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="swimcheck" id="swimcheck"> </td>
					<td>Swim</td>
					<td> <input type="text" class="skilltotal" name="swimtotal" id="swimtotal" readonly> </td>
					<td> <input type="text" class="strmod" name="swimmod" id="swimmod"></td>
					<td> <input type="text" class="ranks" name="swimranks" id="swimranks"> </td>
					<td> <input type="text" class="clskill" name="swimthree" id="swimthree"></td>
					<td> <input type="text" class="racial" name="swimrace" id="swimrace"> </td>
					<td> <input type="text" class="other" name="swimother" id="swimother"> </td>
				</tr>
				<tr class="skill">
					<td> <input type="checkbox" class="classskill" name="umdcheck" id="umdcheck"> </td>
					<td>Use Magic Device</td>
					<td> <input type="text" class="skilltotal" name="umdtotal" id="umdtotal" readonly> </td>
					<td> <input type="text" class="chamod" name="umdmod" id="umdmod"></td>
					<td> <input type="text" class="ranks" name="umdranks" id="umdranks"> </td>
					<td> <input type="text" class="clskill" name="umdthree" id="umdthree"></td>
					<td> <input type="text" class="racial" name="umdrace" id="umdrace"> </td>
					<td> <input type="text" class="other" name="umdother" id="umdother"> </td>
				</tr>

			</table>
		</form>
	</body>
</html>