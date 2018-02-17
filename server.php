<?php

    $username = "";
    $email = "";
    $errors = array();

    // connect to the database?
    // $db = mysqli_connect('server', 'username', 'password', 'table');
    
    // when registering
    if(isset$_POST['register']){
        $username = mysql_real_escape_string($_POST['username']);
        $email = mysql_real_escape_string($_POST['email']);
        $pass1 = mysql_real_escape_string($_POST['password_1']);
        $pass2 = mysql_real_escape_string($_POST['password_2']);
        
        // if they didnt enter something, add error for each to error array
        if(empty($usename)){
            array_push($errors, _"Username is required"); 
        }
        if(empty($email)){
            array_push($errors, _"Email is required"); 
        }
        if(empty($pass1)){
            array_push($errors, _"Password is required"); 
        }
        if($pass1 != $pass2){
            array_push($errors, _"Passwords do not match!"); 
        }

        //otherwise push to database
        if(count($errors) == 0) {
            $password = md5($pass1);
            $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')"
            mysqli_query($db, $sql);
        }
    }
?>