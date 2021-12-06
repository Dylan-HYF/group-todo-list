<?php
include("includes/session-check.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/initialize.css" />
    <link rel="stylesheet" href="css/nav.css">
    <!-- <link rel="stylesheet" href="css/index.css"> -->
    <link rel="stylesheet" href="css/add-task.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <!-- above line doesn't work -->
    <link rel="shortcut icon" type="image/jpg" href="images/palender-favicon.png"/>

    <title>Add New Task</title>
</head>

<body>
    <main class="bg">
        <?php

        if (!isset($_SESSION["groupId"])) {
        ?>
            <p>Create or Join a group!</p>
            <a href="group.php">go to group</a>
        <?php
            exit();
        };
        include("includes/nav.php");
        ?>

        <!-- NOTES: Feel free to change PHP action page. I added <br>'s, but please get rid them if it messes with CSS. -->



        <section id="formSection">
            <h1>Add a New Group Task</h1>
            <hr>

            <form action="process-task.php" method="POST">
                <label for="title">Title</label><br>
                <input type="text" id="title" name="title" required><br>
                <!-- <label for="date">Date</label><br>
                <input type="date" id="date" name="date" required> <br> -->

                <!-- Need Logic: If All Day selected > no selection for Time/is hidden? OR Time is automatically set to: "Now" until 11:59pm or Next Day 12:00AM or 0:00 (if we're doing 24hr clock)
                Using Checkbox b/c the user can still unselect, if they change their mind-->
                <!-- <input type="checkbox" id="allDay" name="allDay" value="allDay">
                <label for="allDay"> Is this event all day?</label><br> -->


                <!-- How would we input Logic to not be able to select a date/time from the past? the "min" "max" attribute?-->
                <label for="timeStart">Time From:</label><br>
                <!-- <input type="time" id="timeStart" name="timeStart" min="09:00" max="18:00" required> <br> -->
                <select name="timeStart" id="timeStart" required>
                    <option value="">--select start time--</option>
                </select><br>
                <!-- <label for="timeEnd">Time To:</label><br>
                <input type="time" id="timeEnd" name="timeEnd" min="09:00" max="18:00" required> <br> -->
                <label for="timeEnd">Time To:</label><br>
                <select name="timeEnd" id="timeEnd" disabled required>
                    <!-- <option value="9">9:00</option> -->
                    <option value="">--select end time--</option>
                </select><br>

                <!-- <br> -->

                <label for="description">Description</label><br>
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Do all the things!"></textarea>



                <br>
                <!-- Need to get names of members and "size" from selection FROM php/database, would they would need to be variables? -->
                <!-- <label for="members">Add members</label><br>
                <select id="members" name="members" size="4" multiple>
                    <option value="member1">Member1</option>
                    <option value="member2">Member2</option>
                    <option value="member3">Member3</option>
                    <option value="member4">Member4</option>
                </select>

                <p id="hint">Please hold down the Ctrl (Windows) / Command (Mac) button and click to select multiple
                    members!</p> -->
                <!-- this is a bit annoying in terms of UX but it works? -->

                <input type="hidden" name="groupId" value="<?= $_SESSION["groupId"] ?>">
                <input type="hidden" name="userId" value="<?= $_SESSION["userId"] ?>">
                <!-- <input type="submit" name="Create"> -->
                <button type="submit">Create</button>
                <!-- <input type="reset">  -->
                <!-- reset button -->
            </form>
        </section>


        <!-- <footer>
            Hello! Please note we use cookies to provide a better site experience! <a href="#">Click to accept cookies</a>
        </footer> -->
    </main>
    <script src="js/addTask.js"></script>
</body>

</html>