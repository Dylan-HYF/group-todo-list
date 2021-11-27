<?php
session_start();
if (!isset($_SESSION["userId"])) {
?>
    <p>unknown user</p>
    <a href="login.php">go back to login</a>
<?php
    // makes the code stop right here
    exit();
}
?>