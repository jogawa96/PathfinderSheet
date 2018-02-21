<?php
include('server.php');
session_start();

$_SESSION['character'] = $_GET['charnames'];

?>