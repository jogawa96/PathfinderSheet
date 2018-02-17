<?php
$mysqli = new mysqli('69.89.31.103', 'urcscon2_dicey', 'dandyhacks', 'urcscon2_dicey');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_error . ') '
            . $mysqli->connect_error);
}
echo '<p>Connection OK '. $mysqli->host_info.'</p>';
echo '<p>Server '.$mysqli->server_info.'</p>';
$mysqli->close();
?>