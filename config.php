<?php
// Mysql Config
$dbuser = "YOUDBUSERNAME";
$dbpass = "YOURDBPASS";
$dbname = "YOURDATABASENAME";
$dbhost = "localhost";

try {
// database connection
$db = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

//SMSPI HASH
$hash ="";
?>