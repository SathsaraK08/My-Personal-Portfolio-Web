<?php
// Production Environment - AWS RDS Remote MySQL Database Connection Configuration

$host = 'mysql.cdm08uoa8kk2.us-east-1.rds.amazonaws.com';
$dbname = 'iportfolio';
$user = 'admin';
$pass = 'Romi.5351';
$charset = 'utf8mb4';

// Create connection
$mysqli = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Example query
$query = "SELECT * FROM your_table_name";
$result = $mysqli->query($query);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        // Process each row
        print_r($row);
    }
} else {
    echo "Error: " . $mysqli->error;
}

// Close connection
$mysqli->close();
?>