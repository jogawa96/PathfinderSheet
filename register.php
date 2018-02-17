<html>
    <head><title>Sign Up</title></head>


    <center><body>
    <form method="post" action="register.php">
    <!-- VALIDATION ERRORS -->
    <?php include('errors.php'); ?>
        <div class="header"><h2>Enter your account information:</h2> </div>

        <div class="input-group">
        <label>Username</label>
        <input type="text" name="username">
        </div>
        <div class="input-group">
        <label>Email Address</label>
        <input type="text" name="email">
        </div>
        <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
        </div>
        <div class="input-group">
        <label>Confirm Password</label>
        <input type="password" name="password_2">
        </div>
        <div class="input-groupp">
        <button type="submit" name="register" class="btn" >Register</button>
        </div>

        <p>Already have an account? <a href="login.php">Sign in</a></p>
    </form>
    </body></center>


</html>