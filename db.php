<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'tong');
define('DB_PASS', '11530-Tong');
define('DB_NAME', 'movie_review');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

//echo 'Connected successfully';

$sql = 'SELECT * FROM movies';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>