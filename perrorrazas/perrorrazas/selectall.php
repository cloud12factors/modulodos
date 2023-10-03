<?php
$stmt = $dbConn->prepare("SELECT * FROM `perrorraza`"); 
$stmt->execute(); 
$data = $stmt->fetchAll(PDO::FETCH_ASSOC); 
header('Content-Type: application/json');
print(json_encode($data));
?>
