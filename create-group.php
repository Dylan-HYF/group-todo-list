<?php
//process-search.php
//receive search Term, find in database table, display results

$groupName = $_POST["groupName"];
$userId = $_POST["userId"];
$username = $_POST["username"];
include("includes/db-connect.php");
$stmt = $pdo->prepare("INSERT INTO `groups` (`groupId`, `groupName`) VALUES (NULL, '$groupName');");
//execute
// $stmt->execute();
// $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $json = json_encode($results);
// echo ($json);
if ($stmt->execute()) {
  // echo ($stmt->fetch());
  // var_dump($pdo->lastInsertId());
  $groupId = $pdo->lastInsertId();
  $join = $pdo->prepare("INSERT INTO `user-group` (`userId`, `groupId`, `username`) VALUES ($userId, $groupId, '$username');");
  if ($join->execute()) {
    header('Location: group.php');
  } else {
?>
    <p>error, please try again, <a href="group.php">go back</a>.</p>
  <?php
  }

  // echo ('{"success": true}');
} else {
  // echo ('{"success": false}');
  ?>
  <p>error, please try again, <a href="group.php">go back</a>.</p>
<?php
}
