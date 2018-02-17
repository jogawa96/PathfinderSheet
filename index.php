// home page!
<html>
    <head><title>Home Page</title></head>


    <center><body>
        <div class="header"> </div>

        <div class="content">
            <?php if(isset($_SESSION['sucess'])); ?>
                <div class="error sucess"> 
                    <h3>
                        <?php 
                            echo $_SESSION['sucess'];
                            unset($_SESSION['sucess']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>

            <?php if(isset($_SESSION["username"])): ?>
                <p> Welcome <?php echo $_SESSION['username']; ?></p>
                <p> <a href="" style="color: red;"> Logout </a></p>

            <?php endif ?>
        </div>

    </body></center>


</html>