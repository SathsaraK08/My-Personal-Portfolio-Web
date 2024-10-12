<?php
// Updated database connection details
$host = "129.80.115.119"; // Your server's IP address
$username = "travor"; // Your database username
$password = "#SK.Tech@4325"; // Your database password
$dbname = "iportfolio"; // Your database name

// Create the database connection
$db = mysqli_connect($host, $username, $password, $dbname);

// Check the connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully"; // This line will display if the connection is successful
?>