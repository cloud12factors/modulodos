 <?php
$servername = getenv('SERVERIPNAME');
$username   = getenv('USERNAME');
$password   = getenv('PASSWORD');
$database   = getenv('DATABASE');

try {
  $dbConn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 
