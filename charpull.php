<?php
require_once "../config.php";
include('server.php');
session_start();


// connect to the database (need database info here) 
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//check for characters
$character_check_query = "SELECT char_name FROM characters WHERE username='{$_SESSION[username]}'";
$all_property = array();

$rows=$db->query("SELECT char_name FROM characters WHERE username='{$_SESSION['username']}'");

echo "<div class=\"container\"><form type=\"POST\" action=\"index.php\"><h1>Characters</h1>";
while(list($charnames)=$rows->fetch_row()){
  echo "<input type=\"radio\" name=\"radio\" value=\"$charnames\">$charnames</button>
  </div>";
}
echo "<input name=\"pickchar\" type=\"submit\" value=\"Choose This Character\"/></div></form>";

  // PICK A CHARACTER FROM HOME PAGE
  if (isset($_POST['pickchar'])){
    if (isset($_POST['radio']))
    {
      $charname = mysqli_real_escape_string($db, $_POST['characterpick']);
      $_SESSION['charname'] = $charname;
      header('location: sheet.php');
    }
		 
  }

/*
//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($character_check_query)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";
*/
?>