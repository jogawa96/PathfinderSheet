<?php
require_once "../config.php";
include('server.php');
session_start();


// connect to the database (need database info here) 
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//check for characters
$character_check_query = "SELECT char_name FROM charactersdata WHERE username='{$_SESSION[username]}'";
$all_property = array();

$rows=$db->query("SELECT char_name FROM charactersdata WHERE username='{$_SESSION['username']}'");

echo "<div class=\"container\"><h1>Characters</h1>";
while(list($charnames)=$rows->fetch_row()){
  echo "<button onclick=\"location.href='sheet.php?charnames=$charnames'\" type=\"button\"><input type=\"submit\" value=\"$charnames\"/></button>";
}
echo "</div>";



?>
