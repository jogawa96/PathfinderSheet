<!-- THIS SCRIPT TERMINATES THE SESSION WHICH DESTROYS THE INFO ABOUT THE USER THAT IS BEING SAVED CLIENT SIDE -->


<?php
    session_start();
    session_destroy();
    echo '
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset=\"utf-8\"/>
            <link rel=\"stylesheet\" href=\"styles2.css\"/>
        </head>
        <body>
            <div>
                You have been logged out.
                <button onclick=\"location.href=\'login.php\'\" type=\"button\">Return to Login Page</button>
            </div>
        You have been logged out
        </body>
    </html>';
?>