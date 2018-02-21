<?php
require_once "../config.php";
include('server.php');
session_start();

  // CHOOSE CHARACTER
  if (isset($_POST['charpick'])) {
    $charname = $_POST['charpick'];
    $_SESSION['charname'] = $charname;
    heading('Location: sheet.php');
    exit;
}

?>