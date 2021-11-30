<?php
//process-search.php
//receive search Term, find in database table, display results

$q = $_GET["q"];
include("includes/db-connect.php");
$stmt = $pdo->prepare("SELECT * FROM `user`
	WHERE `username` LIKE '%$q%';");
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
