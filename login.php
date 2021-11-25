<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log In</title>

        <link rel="stylesheet" href="initialize.css">
        <link rel="stylesheet" href="main.css">
       
    </head>
    <body>

        <fieldset>
            <form action="process-login.php" method="POST">
            <label> Username </label><br>
            <input type="text" name="username" /><br>
            <label> Password </label><br>
            <input type="password" name="password" /><br>
            <input type="submit" value="Log In"/>   
            </form>
        </fieldset>
    
    </body>
</html>