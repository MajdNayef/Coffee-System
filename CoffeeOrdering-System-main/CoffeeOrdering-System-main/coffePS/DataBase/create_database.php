<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'CoffeDB';

// Connect to MySQL server
$conn = mysqli_connect($db_host, $db_user, $db_pass);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create the database
$sql = "CREATE DATABASE $db_name";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

