<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log In</title>

        <link rel="stylesheet" href="css/initialize.css">
        <link rel="stylesheet" href="css/main.css">
       
    </head>
    <body>

        <fieldset>
            <img src="assets/palendar-logo.png" style="width:200px"/> <br>
            <form action="process-login.php" method="POST">
            <label> Username </label><br>
            <input type="text" name="username" /><br>
            <label> Password </label><br>
            <input type="password" name="password" /><br>
            <input type="submit" value="Log In"/>   
            </form>
            <p>Don't have an account? <a href="sign-up.php">Sign up</a></p>
        </fieldset>
    
    </body>
</html>