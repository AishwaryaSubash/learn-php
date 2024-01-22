<?php

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'voting_portal');

// Check connection
if (mysqli_connect_errno($conn)) {
  echo "Connection failed: " . mysqli_connect_error();
}
echo "Connected successfully";
?>

