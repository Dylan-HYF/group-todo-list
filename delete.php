<?php
$taskId = $_GET["taskId"];
//delete a specific record
//connect
include("includes/db-connect.php");

//prepare
$stmt = $pdo->prepare("DELETE FROM `tasks` 
	WHERE `taskId` = $taskId");

if ($stmt->execute() == true) {
  header("Location: index.php");
} else {
  echo ("error, please try again");
?>
  <a href="index.php">go back to dashboard</a>
<?php
}
