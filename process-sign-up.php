<?php
// include("includes/session-check.php");


$username = $_POST['username'];
$password = $_POST['password'];
$color = $_POST['color'];
// $groupSet = $_POST['groupSet'];
// insert data into db
// connect 
include('includes/db-connect.php');
// prepare
// mySQL variables use quotes
$stmt = $pdo->prepare("INSERT INTO `user` (`userId`, `username`, `password`, `color`) VALUES (NULL, '$username', '$password', '$color');");
// execute
if ($stmt->execute()) {
  // redirect
  header('Location: login.php');
  // echo ('success');
} else {
  echo ('error');
?>
  <a href="sign-up.php">go back</a>
<?php
}
?>