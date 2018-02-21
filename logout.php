<!-- THIS SCRIPT TERMINATES THE SESSION WHICH DESTROYS THE INFO ABOUT THE USER THAT IS BEING SAVED CLIENT SIDE -->


<?php
    session_start();
    session_destroy();
    header("Location: login.php");
    exit;
?>