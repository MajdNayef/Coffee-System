<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the submitted data
    $name = $_POST["name"] ?? "";
    $total = $_POST["total"] ?? "";
    $note = $_POST["note"] ?? "";

    // Validate the data (you can add your own validation logic here)

    // Store the feedback in the "feedback" table
    // Replace the database connection details with your own
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'CoffeDB';
    
    
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    

    // Prepare and execute the SQL query to insert the feedback data
    $stmt = $pdo->prepare("INSERT INTO orders (name, total, note) VALUES ($name, $total, $note)");
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":total", $total);
    $stmt->bindParam(":note", $note);
    $stmt->execute();

    // Send a response back to the client
    header("Content-Type: application/json");
    echo json_encode(["success" => true, "message" => "Feedback stored successfully!"]);
} else {
    // Invalid request method
    header("HTTP/1.1 405 Method Not Allowed");
    header("Content-Type: application/json");
    echo json_encode(["success" => false, "message" => "Invalid request method"]);
}
?>
