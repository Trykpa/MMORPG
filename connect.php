<?php
$servername = "localhost";
$username = "root";
$password = "Admin";
$dbname = "MMO";

// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if(!$conn){
		die("Coś nie pykło: " . mysql_connect_error());
	}
// Check connection
if ($conn->connect_error) {
  die("Sie zepsulo zamiast sie polaczyc: " . $conn->connect_error);
}
?>