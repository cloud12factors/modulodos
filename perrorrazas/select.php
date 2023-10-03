<?php
$stmt = $dbConn->prepare("SELECT * FROM `perrorraza` WHERE `id`=:id"); 
$stmt->bindParam(":id", $id, PDO::PARAM_INT); 
$stmt->execute(); 
$data = $stmt->fetch(PDO::FETCH_ASSOC);  
header('Content-Type: application/json');
print(json_encode($data));
?>
