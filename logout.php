<?php
session_start();
session_destroy();
header('Location: login.php');

?>
<!-- <a href="login.php">Back to login</a> -->