<?php
require_once "../config.php";

session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database (need database info here) 
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// register a user
if (isset($_POST['register'])) {
  
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // user is not allowed to leave blanks, passwords must match..
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // make sure the user does not already exist
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "User already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already registered");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
      header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
  }
}

// SELECT A CHARACTER
  
if (isset($_POST['charpick'])) {
  $charname = $_POST['charpick'];
  $_SESSION['character'] = $charname;
  heading('Location: sheet.php');
}

// CREATE A CHARACTER AND SET BASE STATS ! 

if (isset($_POST['create'])) {

   $charname = mysqli_real_escape_string($db, $_POST['charname']);
   $charismaraw = mysqli_real_escape_string($db, $_POST['charismaraw']);
   $wisdomraw = mysqli_real_escape_string($db, $_POST['wisdomraw']);
   $intelraw = mysqli_real_escape_string($db, $_POST['intelraw']);
   $strengthraw = mysqli_real_escape_string($db, $_POST['strengthraw']);
   $constitutionraw = mysqli_real_escape_string($db, $_POST['constitutionraw']);
   $dexterityraw = mysqli_real_escape_string($db, $_POST['dexterityraw']);
   
   $_SESSION['strengthraw'] = $strengthraw;
   $_SESSION['character'] = $charname;
   $_SESSION['charismaraw'] = $charismaraw;
   $_SESSION['wisdomraw'] = $wisdomraw;
   $_SESSION['intelraw'] = $intelraw;
   $_SESSION['constitutionraw'] = $constitutionraw;
   $_SESSION['dexterityraw'] = $dexterityraw;
      
    $query = "INSERT INTO `characters` (`username`, `char_name`, `charisma_raw`, `wisdom_raw`, `intel_raw`, `strength_raw`, `constitution_raw`, `dexterity_raw`) 
                VALUES('{$_SESSION[username]}' , '$charname', '$charismaraw', '$wisdomraw', '$intelraw', '$strengthraw', '$constitutionraw', '$dexterityraw')";
    mysqli_query($db, $query);
    header('location: sheet.php');
    
}
  
// UPDATE MORE THAN BASE STATS ON SHEET PAGE
	  if (isset($_POST['save'])) {
		 $charlvl = mysqli_real_escape_string($db, $_POST['charlvl']);
		 $charrace = mysqli_real_escape_string($db, $_POST['charrace']);
		 $charsize = mysqli_real_escape_string($db, $_POST['charsize']);
		 $charalign = mysqli_real_escape_string($db, $_POST['charalign']);
		 $chargender = mysqli_real_escape_string($db, $_POST['chargender']);
		 $charage = mysqli_real_escape_string($db, $_POST['charage']);
		 $charheight = mysqli_real_escape_string($db, $_POST['charheight']);
		 $charhair = mysqli_real_escape_string($db, $_POST['charhair']);
		 $chareyes = mysqli_real_escape_string($db, $_POST['chareyes']);
    
     $_SESSION['charlvl'] = $charlvl;
     /*
	  $query = "UPDATE `characters` SET `char_level`=$charlvl,`char_race`=$charrace,`char_size`=$charsize,`char_alignment`=$charalign,
	  `char_gender`=$chargender,`char_age`=$charage,`char_height`=$charheight,`char_hair`=$charhair,`char_eye`=$chareyes) 
    WHERE $charname={$_SESSION['character']}";
    */
      //$query = "INSERT INTO `characters` (`username`, `char_name`) VALUES ('{$_SESSION[username]}', '$charname')";
      $query = "UDPATE `characters` SET `char_level` = $charlvl WHERE $charname={$_SESSION['character']}";
      mysqli_query($db, $query);
      header('location: sheet.php');  
  }
  

  ?>