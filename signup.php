<?php
$servername = "sql12.freesqldatabase.com";
$username = "sql12710619";
$password = "nGTDI9i4Gy";
$database = "sql12710619";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Handle signup form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Insert user data into database
  $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

  if ($conn->query($sql) === TRUE) {
    echo "User signed up successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
