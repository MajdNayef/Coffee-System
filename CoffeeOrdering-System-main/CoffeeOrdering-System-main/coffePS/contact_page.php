<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Database connection
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'CoffeDB';

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the "FeedBack" table
    $sql = "INSERT INTO FeedBack (name, Email, note) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Success message
        echo "<script>alert('Thank you for your message!');</script>";
    } else {
        // Error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    sleep(5);
}
?>


<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Responsive Contact Us Form | CodingLab</title>
  <link rel="stylesheet" href="contact_style.css">
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    
    /* Overlay Styles */
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.3s ease;
    }

    .overlay.show {
      opacity: 1;
      pointer-events: auto;
    }

    .overlay .message {
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">UTM, N28</div>
          <div class="text-two">JOHOR, SKUDAI</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+011 398 39391</div>
          <div class="text-two">+011 398 39391</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">abdullahzayan.my@gmail.com</div>
          <div class="text-two">abdullahzayan.my@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any feedback or any questions, you can send me a message from here. It's my pleasure to help you.</p>
        <form action="" method="POST">
          <div class="input-box">
            <input type="text" placeholder="Enter your name" name="name">
          </div>
          <div class="input-box">
            <input type="text" placeholder="Enter your email" name="email">
          </div>
          <div class="input-box message-box">
            <textarea name="message"></textarea>
          </div>
          <div class="button">
            <input type="submit" value="Send Now" onclick="showOverlay()">
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Overlay Markup -->
  <div class="overlay" id="overlay">
    <div class="message">
      Thank you for your message!
    </div>
  </div>

  <script>
    function showOverlay() {
      var overlay = document.getElementById("overlay");
      overlay.classList.add("show");
      overlay.addEventListener("click", function () {
        overlay.classList.remove("show");
      });
    }
  </script>

</body>

</html>
