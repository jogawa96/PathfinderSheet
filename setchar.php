<?php 
include('server.php');
session_start();
require_once "../config.php";

// connect to the database (need database info here) 
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!empty($_GET)){
$_SESSION['character'] = $_GET['charnames'];
$get_character_info = "SELECT charisma_raw, strength_raw, intel_raw, constitution_raw, wisdom_raw, dexterity_raw,
                        char_level, char_race, char_size, char_alignment, char_gender, char_age, char_height
                        char_hair, char_eye FROM charactersdata WHERE char_name='{$_SESSION['character']}' AND username='{$_SESSION['username']}'";
$test = mysqli_query($db, $get_character_info);
$row=$test->fetch_array();
$_SESSION['charismaraw']=intval($row[0]);
$_SESSION['strengthraw']=intval($row[1]);
$_SESSION['intelraw']=intval($row[2]);
$_SESSION['constitutionraw']=intval($row[3]);
$_SESSION['wisdomraw']=intval($row[4]);
$_SESSION['dexterityraw']=intval($row[5]);
$_SESSION['charlvl']=intval($row[6]);
$_SESSION['charrace']=intval($row[7]);
$_SESSION['charsize']=intval($row[8]);
$_SESSION['charalign']=intval($row[9]);
$_SESSION['chargender']=intval($row[10]);
$_SESSION['charage']=intval($row[11]);
$_SESSION['charheight']=intval($row[12]);
$_SESSION['charhair']=intval($row[13]);
$_SESSION['chareyes']=intval($row[14]);

}
?>


