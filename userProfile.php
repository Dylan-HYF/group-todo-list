<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/initialize.css">
    <link rel="stylesheet" href="css/nav.css">
    <title>User Profile</title>
</head>

<body>
    <!-- <nav>
        <a href = "index.php"><img class="logo" src="logo.png" alt="Palender">
        <a href="dashboard.php">Dashboard</a>
        <a href="group.php">Groups</a>

        <a href="logout.php">Logout</a>
        <a href = "userProfile.php"><img src="user.png" alt="user"></a>

    </nav> -->
    <header>
        <nav>
            <img src="images/logo.png" alt="logo" id="logo">
            <ul>
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="group.html">Groups</a></li>
            </ul>
            <div class="username">
                <span>Hi username!</span>
                <a href="userProfile.php">
                    <div class="avatar">R</div>
                </a>
            </div>
        </nav>
    </header>
    <section style="padding: 20px">
        <h1>Username</h1>
        <hr>
        <h2>Profile Icon</h2>
        <label for="color">Color</label><br>
        <input type="color" value="#D0CEE7" id="color">
        <hr>
        <br>
        <a>Group List</a><br>
        <ul>
            <li>Group name
            <li>Group name
            <li>Group name
        </ul><br>
        <br>
        <a href="#">Edit Profile</a>

    </section>
</body>

</html>