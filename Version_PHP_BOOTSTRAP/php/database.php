<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'ema_learning';

try {
  $conn2 = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>