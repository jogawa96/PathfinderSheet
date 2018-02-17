<?php include('server.php'); ?>

<html>
    <head><title>Login</title></head>


    <center><body>
    <form method="post" action="login.php">
        <div class="header"><h2>Enter your account information:</h2> </div>

        <div class="input-group">
        <label>Username</label>
        <input type="text" name="username">
        </div>
        <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
        </div>
        <div class="input-groupp">
        <button type="submit" name="login" class="btn" >Submit</button>
        </div>

        <p>Don't have an account? <a href="register.php">Sign up</a></p>
    </form>
    </body></center>


</html>
