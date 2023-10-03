<?php
$stmt = $dbConn->prepare("INSERT INTO perrorraza(raza) VALUES(:raza)"); 
$stmt->bindparam(':raza', $raza,PDO::PARAM_STR); 
$stmt->execute(); 
//$id = $dbConn->lastInsertId(); //Get last inserted id  
?>
