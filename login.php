<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In</title>

    <link rel="stylesheet" href="css/initialize.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- <link rel="stylesheet" href="css/nav.css"> -->

</head>

<body>
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
            <label> Username </label><br>
            <input type="text" name="username" /><br>
            <label> Password </label><br>
            <input type="password" name="password" /><br>
            <input type="submit" value="Log In" />
        </form>
        <p>Don't have an account? <a href="sign-up.php" style="color: #9892C7">Sign up</a></p>
    </div>

</body>

</html>