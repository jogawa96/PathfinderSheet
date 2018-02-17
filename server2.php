<?php
    session_start();
    $username = "";
    $email = "";
    $errors = array();

    // connect to the database?
    $db = mysqli_connect('localhost', 'root', '', 'reg');
    
    // when registering
    if(isset$_POST['register']){
        $username = mysql_real_escape_string($_POST['username']);
        $email = mysql_real_escape_string($_POST['email']);
        $pass1 = mysql_real_escape_string($_POST['password_1']);
        $pass2 = mysql_real_escape_string($_POST['password_2']);
        
        // if they didnt enter something, add error for each to error array
        if(empty($username)){
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

        // does user exist already??
        $user_check_query = "SELECT * FROM reg WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) { // if user exists
            if ($user['username'] === $username) {
              array_push($errors, "User already exists");
            }
        
            if ($user['email'] === $email) {
              array_push($errors, "email already exists");
            }
          }

        //otherwise push to database
        if(count($errors) == 0) {
            $password = md5($pass1);
            $sql = "INSERT INTO reg (username, password, email) VALUES ('$username', '$password', '$email')"
            mysqli_query($db, $sql);
            $_SESSION['username'] = $username;
            $_SESSION['sucess'] = "You are now logged in.";
            header('location: index.php'); // home page
        }

    }
?>