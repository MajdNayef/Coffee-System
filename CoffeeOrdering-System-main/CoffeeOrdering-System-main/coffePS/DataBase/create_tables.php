<?php
// Q1: establish connection to the database using config.php
require_once("config.php");

// for Customers Table
$sql = "CREATE TABLE Customers (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    userName VARCHAR(50) NOT NULL,
    Password VARCHAR(20) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Customers created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// for admins Table
$sql2 = "CREATE TABLE Admins (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    userName VARCHAR(50) NOT NULL,
    Password VARCHAR(20) NOT NULL
)";

if (mysqli_query($conn, $sql2)) {
    echo "Table Admins created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}



// for Orders Table
$sql10 = "CREATE TABLE Orders (
    OrderNo INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    Total DECIMAL(8, 2) NOT NULL,
    Note VARCHAR(50)
)";

if (mysqli_query($conn, $sql10)) {
    echo "Table Orders created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


// for FeedBack Table
$sql13 = "CREATE TABLE FeedBack (
    FeeDNo INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    Note VARCHAR(50) Not null
)";

if (mysqli_query($conn, $sql13)) {
    echo "Table Feedbacks created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
