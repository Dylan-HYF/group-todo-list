<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>

    <link rel="stylesheet" href="css/initialize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/nav.css">

</head>

<body>

    <header>
        <!--nav bar-->
        <nav>
            <img src="images/logo.png" alt="logo" id="logo">
            <ul>
                <li><a href="login.php">Log In</a></li>
                <li><a href="sign-up.php">Sign Up</a></li>
            </ul>
            <div class="username">
                <span>Hi username!</span>
                <a href="userProfile.php">
                    <div class="avatar">R</div>
                </a>
            </div>
        </nav>
    </header>

    <div id="signup">
        <!--sign up form-->
        <p>Welcome to <br>
            <img src="images/logo-colour.png" id="clogo" /> <br>
            Sign up below to get started!
        </p>
        <form method="POST" action="process-sign-up.php">
            <label>Username</label><br>
            <input type="text" name="username" required><br>
            <label>Password</label><br>
            <input type="text" name="password" required><br>
            <label>Pick your profile colour</label><br>
            <input type="color" name="color" value="#d1cee7" required><br>
            <label>Join a Group</label>
            <input type="radio" name="groupSet" value="1" required><br>
            <label>Create a Group</label>
            <input type="radio" name="groupSet" value="2"><br>
            <label>Not now</label>
            <input type="radio" name="groupSet" value="3"><br>
            <!--if box is checked, search bar shows up-->
            <!-- <input type="search" name="q"><br> -->
            <input type="submit" value="Sign Up">
        </form>
        <p>Already have an account? <a href="login.php" style="color: #9892C7">Log in</a></p>
    </div>

</body>

</html>