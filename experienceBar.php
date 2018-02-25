<?php session_start();
	include('server.php');
	require_once "../config.php";
	// connect to the database (need database info here) 
	$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	$charLevel = $_SESSION['charlvl'];
	$progType = 'Medium'; //$_SESSION['progtype'];
	$charEXP = 10; //$_SESSION['charexp'];
	$charname = $_SESSION['character'];
	$username = $_SESSION['username'];
	$currentExpQuery = "SELECT `exp` FROM `charactersdata` WHERE `char_name`='$charname' AND `username`='$username'";
	$resultOne = mysqli_query($db, $currentExpQuery);
	$rowOne=$resultOne->fetch_array();
	$expHave = intval($rowOne[0]);
	$levelQuery = "SELECT `exp_levelUP` FROM `progression` WHERE `current_level`='$charLevel' AND `progression_type`='$progType'";
	$result = mysqli_query($db, $levelQuery);
	$row=$result->fetch_array();
	$expNeed = intval($row[0]);

	if($expHave>0){
	$widthHave = ( $expHave / $expNeed ) * 100 - 3;
	$widthNeed = 100 - $widthHave - 2;
	}
	else{
		$widthHave = 2;
		$widthNeed = 95;
	}
?>
<div id="exp-bar">
	<div>
		<p id="exp-earned" style="width:<?php echo $widthHave?>%;"><?php echo $expHave?>/<?php echo $expNeed?></p>
		<p id="exp-max" style="width:<?php echo $widthNeed?>%;">0/20</p>
	</div>
</div>

