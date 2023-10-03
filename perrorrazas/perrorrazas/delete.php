<?php
$stmt = $dbConn->prepare("DELETE FROM perrorraza WHERE id = :id"); 
$stmt->bindParam(':id', $id, PDO::PARAM_INT); 
$stmt->execute();  
?>
