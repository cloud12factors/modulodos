<?php
$stmt = $dbConn->prepare("UPDATE perrorraza SET `raza` = :raza WHERE `id` = :id"); 
$stmt->bindParam(':raza', $raza, PDO::PARAM_STR); 
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
?>
