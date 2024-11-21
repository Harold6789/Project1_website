<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogsite";

// create connection
$conn = new mysqli( hostname: $servername, username: $username,
password: $password, database: $dbname);

// check connection
if ($conn->connect_error) {
              die("Connection failed " . $conn->connect_error);
}
echo "Connected successfully";
