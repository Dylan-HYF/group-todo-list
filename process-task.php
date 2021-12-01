<?php
$userId = $_POST["userId"];
$groupId = $_POST["groupId"];
$title = $_POST["title"];
$description = $_POST["description"];
$timeStart = $_POST["timeStart"];
$timeEnd = $_POST["timeEnd"];
include("includes/db-connect.php");
$stmt = $pdo->prepare("INSERT INTO `tasks` (`taskId`, `userId`, `groupId`, `timeStart`, `timeEnd`, `title`, `description`) VALUES (NULL, '$userId', '$groupId', '$timeStart', '$timeEnd', '$title', '$description');");
if ($stmt->execute()) {
  // $_SESSION["groupId"] = $groupId;
  header("Location: index.php");
} else {
?>
  <p>error, please try again, <a href="add-task.php">go back</a>.</p>
<?php
}
