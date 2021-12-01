<?php
//process-search.php
//receive search Term, find in database table, display results

$groupId = $_GET["groupId"];
include("includes/db-connect.php");
$stmt = $pdo->prepare("SELECT * FROM `groups` WHERE `groups`.`groupId` = $groupId");
//execute
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo ($json);

//display
// while($row = $stmt->fetch()) { 
// 	
          // 	echo($row["personId"]);
          // 	echo("<br/>");
          // 	echo($row["firstName"]);
          // 	echo("<br/>");
          // 	echo($row["lastName"]);
          // 	echo("<br/>");
          // 	echo($row["dob"]);
          // 	echo("<br/>");

          // }
