<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign Up</title>

        <link rel="stylesheet" href="initialize.css">
        <link rel="stylesheet" href="main.css">
        
    </head>
    <body>

        <fieldset>
            <form method="POST" action="process-sign-up.php">
                <label>Username</label><br>
                <input type="text" name="username" required><br>
                <label>Password</label><br>
                <input type="text" name="password" required><br>
                <label>Profile Color</label><br>
                <input type="color" name="color" required><br>
                <input type="submit" value="Sign Up">
            </form>
        </fieldset>

    </body>
</html>