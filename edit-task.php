<?php
$taskId = $_POST["taskId"];
$title = $_POST["title"];
$description = $_POST["description"];

include("includes/db-connect.php");

$stmt = $pdo->prepare("UPDATE `tasks` 
SET `title` = '$title', 
`description` = '$description'
WHERE `tasks`.`taskId` = $taskId;");
// execute
if ($stmt->execute()) {
  // redirect
  // header('Location: index.php');
  echo ('{"success": true}');
} else {
  echo ('{"success": false}');
}
