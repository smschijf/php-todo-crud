<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db_name = "todo_crud";

// Create connection
$con = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

?>