<?php
define('HOSTNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME','ecommerce');

// Create connection
$conn = new mysqli(HOSTNAME, USERNAME, PASSWORD, DBNAME);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>