<?php
$servername = "localhost";
$username = "webprogmi222_sf221";
$password = "xE*Y2nleNVvZm[!!";
$dbname = "webprogmi222_sf221";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, gender, email, website, comment FROM kumandal_myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "Guest: " . $row["name"]. " (" . $row["gender"]. ") - " . $row["email"]. ", " . $row["website"]. "   '" . $row["comment"]. "' ";
} else {
  echo "0 results";
}

$conn->close();
?>