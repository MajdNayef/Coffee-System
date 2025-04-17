<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the form data (you can add more validation if needed)
    if (empty($username) || empty($password)) {
        $error = "Please enter both username and password.";
    } else {
        // Perform your authentication logic here (e.g., check against a database)
        // Assuming you have a database table named "users" with columns "username" and "password"

        // Establish a database connection
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'CoffeDB';
        
        
        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        

        if (!$conn) {
            die("Database connection failed: " . mysqli_connect_error());
        }
        
// Sanitize user input to prevent SQL injection
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Query the database for customer authentication
$query = "SELECT * FROM Customers WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

// Check if the query returned any rows
if (mysqli_num_rows($result) === 1) {
    // Authentication successful
    $_SESSION["username"] = $username;
    // Redirect the user to the main page
    header("Location: cart.html");
    exit();
} else {
    // Customer authentication failed
    // Query the database for admin authentication
    $query2 = "SELECT * FROM Admins WHERE username='$username' AND password='$password'";
    $result2 = mysqli_query($conn, $query2);

    // Check if the query returned any rows
    if (mysqli_num_rows($result2) === 1) {
        // Authentication successful
        $_SESSION["username"] = $username;
        // Redirect the user to the admin page
        header("Location: ordersub.php");
        exit();
    } else {
        // Admin authentication failed
        $error = "Invalid username or password.";
    }
}

        // Close the database connection
        mysqli_close($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login_style.css">
</head>
<body>
    
      <div class="container">

    <form class="login-form" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <h2>Login</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        
        <?php
    if (isset($error)) {
        echo '<p>' . $error . '</p>';
    }
    ?>

        <input class="submit-btn" type="submit" value="Login">

        </div>

    </form>

</body>
</html>
