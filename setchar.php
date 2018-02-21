<?php
include('server.php');
session_start();
require_once "../config.php";

// connect to the database (need database info here) 
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$_SESSION['character'] = $_GET['charnames'];
$get_character_info = "SELECT 'charisma_raw' FROM `characters` WHERE username='{$_SESSION['username']}' AND char_name='{$_SESSION['character']}'";
$test = mysqli_query($db, $get_character_info);
$row=$test->fetch_assoc();
$charismaraw = intval($row['charisma_raw']);
$_SESSION['charismaraw']=$charismaraw;

?>


