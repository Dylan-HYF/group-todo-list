<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>

    <link rel="stylesheet" href="css/initialize.css">
    <link rel="stylesheet" href="css/login-signup.css">
    <!-- <link rel="stylesheet" href="css/nav.css"> -->

</head>

<body>
    <main class="bg">
        <!-- nav bar-->
        <!-- <header>
            
            <nav>
                <img src="images/logo.png" alt="logo" id="logo">
                <ul>
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="sign-up.php">Sign Up</a></li>
                </ul>
            </nav>
        </header> -->

        <div id="signup">
            <!--sign up form-->
            <p>Welcome to<br>
                <img src="images/logo-colour.png" id="clogo" /> <br>
                <span style="font-weight: 300;">Sign up below to get started!</span>
            </p>
            <form method="POST" action="process-sign-up.php" name="signUp">
                <div style="text-align: left; transform: translate(70px, 0px);"><label>Username</label></div>
                <input type="text" name="username" required><br>
                <div style="text-align: left; transform: translate(70px, 0px);"><label>Password</label></div>
                <input type="text" name="password" required><br>
                <div style="text-align: left; transform: translate(70px, 0px);"><label>Pick your profile colour</label></div>
                <input type="color" name="color" value="#d1cee7" required><br>
                <!-- <label>Join a Group</label>
                <input type="radio" name="groupSet" value="1" required><br>
                <label>Create a Group</label>
                <input type="radio" name="groupSet" value="2">
                <input type="text" placeholder="group name" name="groupName" style="display:none">
                <br>
                <label>Not now</label>
                <input type="radio" name="groupSet" value="3"><br> -->
                <!--if box is checked, search bar shows up-->
                <!-- <input type="search" name="q"><br> -->
                <input type="submit" value="Sign Up">
            </form>
            <p>Already have an account? <a href="login.php">Log in</a></p>
        </div>
    </main>
    <!-- <script src="js/signUp.js"></script> -->
</body>

</html>