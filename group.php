<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/initialize.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/group.css">
    <title>Group</title>
</head>

<body>
    <main class="bg">
        <?php
        include("includes/session-check.php");
        include("includes/nav.php");
        ?>
        <section class="container">
            <section class="current">
                <h1>Current Goup</h1>
                <hr>
                <h2>PeePeegas</h2>
                <div class="members-container">
                    <div class="avatar">M</div>
                    <span>Mimi</span>
                </div>
                <div class="members-container">
                    <div class="avatar dark">R</div>
                    <span>Reynold</span>
                </div>
                <div class="members-container">
                    <div class="avatar dark">A</div>
                    <span>Aly</span>
                </div>
                <div class="members-container">
                    <div class="avatar">D</div>
                    <span>Dylan</span>
                </div>
            </section>
            <div class="line"></div>
            <section class="create-group">
                <h1>Create a New Goup</h1>
                <hr>
                <p>Group name</p>
                <input type="text">
                <p>Add members</p>
                <input type="text">
                <input type="submit" value="create">
            </section>
        </section>
    </main>
</body>

</html>