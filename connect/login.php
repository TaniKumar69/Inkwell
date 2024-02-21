<?php
$servername = "localhost";  // Change this according to our MySQL server name
$username = "tanik";  // Change this according to our MySQL username
$password = "tanik@12";  // Change this according to our MySQL password
$dbname = "test2";  // Change this according to our MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$user = $_POST["username"];
$pass = $_POST["password"];

// Perform any necessary validation and security measures here

// Prepare and execute a SQL query
$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Login successful
    echo "Login successful!";
} else {
    // Login failed
    echo "Login failed. Please check your username and password.";
}

// Close the connection
$conn->close();
?>
