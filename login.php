<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In</title>

    <link rel="stylesheet" href="css/initialize.css">
    <link rel="stylesheet" href="css/login-signup.css">
    <!-- <link rel="stylesheet" href="css/nav.css"> -->
    <link rel="shortcut icon" type="image/jpg" href="images/palender-favicon.png"/>

</head>

<body>
    <main class="bg">
        <!--nav bar-->

        <!-- <header>
            <nav>
                <img src="images/logo.png" alt="logo" id="logo">
                <ul>
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="sign-up.php">Sign Up</a></li>
                </ul>
            </nav>
        </header> -->

        <div id="login">
            <!-- log in form -->
            <img src="images/logo-colour.png" id="clogo" /> <br>
            <form action="process-login.php" method="POST">
                <div style="text-align: left; transform: translate(72px, 0px);"><label> Username </label></div>
                <input type="text" name="username" /><br>
                <div style="text-align: left; transform: translate(72px, 0px);"><label> Password </label></div>
                <input type="password" name="password" /><br>
                <input type="submit" value="Log In" />
            </form>
            <p>Don't have an account? <a href="sign-up.php">Sign up</a></p>
        </div>
    </main>
</body>

</html>