<?php 

$servername = "127.0.0.1";
$username = "Chaoszwiebel";
$password = "ZwiebelArmy1850#";
$dbname = "Tower-Defense";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$conn->query("INSERT INTO user VALUES(3, 3,3,3)")
?>