<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign Up</title>

        <link rel="stylesheet" href="css/initialize.css">
        <link rel="stylesheet" href="css/main.css">
        
    </head>
    <body>

        <fieldset>
            <p>Welcome to <br>
            <img src="assets/palendar-logo.png" style="width:200px"/> <br>
            Sign up below to get started!</p>
            <form method="POST" action="process-sign-up.php">
                <label>Username</label><br>
                <input type="text" name="username" required><br>
                <label>Password</label><br>
                <input type="text" name="password" required><br>
                <label>Pick your profile colour</label><br>
                <input type="color" name="color" value="#d1cee7" required><br>
                <label>Join a Group?</label>
                <input type="checkbox" name="groupy"><br>
                <!--if box is checked, search bar shows up-->
                <input type="search" name="q" ><br>
                <input type="submit" value="Sign Up">
            </form>
            <p>Already have an account? <a href="login.php">Log in</a></p>
        </fieldset>

    </body>
</html>