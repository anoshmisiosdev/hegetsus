<?php
#Connection Values
$servername = "localhost";
$username = "root";
#  $password = '123456';
$password = "123456"; # Mr Millard's password is an empty string.

// Create connection to MySQL
$conn = new mysqli($servername, $username, $password);

// Test connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>