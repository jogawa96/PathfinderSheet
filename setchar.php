<?php 
include('server.php');
session_start();
require_once "../config.php";

// connect to the database (need database info here) 
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!empty($_GET)){
$_SESSION['character'] = $_GET['charnames'];
$get_character_info = "SELECT charisma_raw, strength_raw, intel_raw, constitution_raw, wisdom_raw, dexterity_raw FROM characters WHERE username='{$_SESSION['username']}' AND char_name='{$_SESSION['character']}'";
$test = mysqli_query($db, $get_character_info);
$row=$test->fetch_array();
$_SESSION['charismaraw']=intval($row[0]);
$_SESSION['strengthraw']=intval($row[1]);
$_SESSION['intelraw']=intval($row[2]);
$_SESSION['constitutionraw']=intval($row[3]);
$_SESSION['wisdomraw']=intval($row[4]);
$_SESSION['dexterityraw']=intval($row[5]);
}
?>


