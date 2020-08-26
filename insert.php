<?php
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "divya";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql = "INSERT INTO `login`(username,email,password)VALUES('$username', '$email','$password')";
 
 
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>