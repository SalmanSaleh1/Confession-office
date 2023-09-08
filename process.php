<?php
require('connect.php');
$text = $_POST['text'];

$sql = "INSERT INTO texts (text) VALUES ('$text')";

if ($mysqli->query($sql) === TRUE) { 
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$mysqli->close();
?>
