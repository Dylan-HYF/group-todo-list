<?php
session_start();

$groupId = $_GET["groupId"];
$userId = $_SESSION["userId"];
$username = $_SESSION["username"];
include("includes/db-connect.php");
$stmt = $pdo->prepare("INSERT INTO `user-group` (`userId`, `groupId`, `username`) VALUES ('$userId', '$groupId', '$username');");
if ($stmt->execute()) {
  $_SESSION["groupId"] = $groupId;
  header("Location: group.php");
} else {
?>
  <p>error, please try again, <a href="group.php">go back</a>.</p>
<?php
}
