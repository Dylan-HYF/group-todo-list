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
            <?php
            include("includes/db-connect.php");
            $userId = $_SESSION["userId"];
            //prepare
            $stmt = $pdo->prepare("SELECT * FROM `user-group` WHERE `user-group`.`userId` = $userId;");

            //execute
            $stmt->execute();
            $row = $stmt->fetch();

            if (empty($row)) {
            ?>
                <section class="create-group">
                    <h1>You are not in any group</h1>
                    <hr>
                    <label>Create a group</label>
                    <input type="radio" name="groupSet" value="1">
                    <label>Join a group</label>
                    <input type="radio" name="groupSet" value="2">
                    <form action="create-group.php" method="post" id="createGroup" style="display: none">
                        <label>
                            Group name
                        </label>
                        <input type="hidden" name="userId" value="<?= $_SESSION["userId"] ?>">
                        <input type="hidden" name="username" value="<?= $_SESSION["username"] ?>">
                        <input type="text" name="groupName" placeholder="Group name" required>
                        <input type="submit" value="create">
                    </form>
                </section>
                <!-- <section class="create-group">
                    <h1>Create a New Goup</h1>
                    <hr> -->
                <!-- <p>Group name</p>
                <input type="text">
                <p>Add members</p>
                <input type="text">
                <input type="submit" value="create"> -->
                <!-- <form name="createGroup">
                        <label>
                            Group name
                        </label>
                        <input type="text" name="groupName" placeholder="Group name" required>
                        <input type="submit" value="create"> -->
                <!-- <br> -->
                <!-- <label for="mySearch">
                        Add members
                    </label> -->
                <!-- <input type="text" name="groupName" placeholder="Group name"> -->
                <!-- <input type="search" id="mySearch" name="q">
                    <button type="button" id="search">Search</button>
                    <div id="output"> -->
                <!-- <div>
                            <span>username</span>
                            <a href="#">+ add</a>
                        </div> -->
                <!-- </div> -->
                <!-- </form> -->
                <!-- <section class="add-members" style="display: none">
                        
                        <input type="search" id="mySearch" name="q">
                        <button type="button" id="search">Search</button>
                        <div id="output"></div>
                        <h3>Members</h3>
                        <ol>
                            <li><?= $_SESSION["username"] ?></li>
                        </ol>
                    </section> -->
                <!-- </section> -->
                <!-- <section class="add-members" style="display: none">
                    <h1>Add members</h1>
                    <hr>
                    <input type="search" id="mySearch" name="q">
                    <button type="button" id="search">Search</button>
                    <div id="output"></div>
                </section> -->
                <script src="js/createGroup.js"></script>
            <?php
            } else {
            ?>
                <section class="current">
                    <h1>Current Goup</h1>
                    <hr>
                    <?php
                    $groupId = $row["groupId"];
                    $group = $pdo->prepare("SELECT * FROM `groups` WHERE `groups`.`groupId` = $groupId;");
                    $group->execute();
                    $name = $group->fetch();
                    ?>
                    <h2><?= $name["groupName"] ?></h2>
                    <?php
                    $users = $pdo->prepare("SELECT * FROM `user-group` WHERE `user-group`.`groupId` = $groupId;");
                    $users->execute();
                    while ($user = $users->fetch()) {
                    ?>
                        <div class="members-container">
                            <div class="avatar"><?= $user["username"][0] ?></div>
                            <span><?= $user["username"] ?></span>
                        </div>
                    <?php
                    }
                    ?>

                    <!-- <div class="members-container">
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
                    </div> -->
                </section>
            <?php
            }
            ?>
            <!-- <section class="current">
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
            </section> -->
            <!-- <div class="line"></div>  -->

        </section>
    </main>
    <!-- <script src="js/group.js"></script> -->
</body>

</html>