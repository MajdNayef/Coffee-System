<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Feedback</title>
    <link rel="stylesheet" href="ordersub.css">
</head>
<body>
    <main class="table">
        <section class="table__header">
            <h1>Customer's Feedback</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="images/search.png" alt="">
            </div>
        </section>
        <section class="table__content">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Feedback</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  $db_host = 'localhost';
                  $db_user = 'root';
                  $db_pass = '';
                  $db_name = 'CoffeDB';
              
                  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
              
                  $sql = "SELECT * FROM feedback";
                  $result = mysqli_query($conn, $sql);
              
                  if (mysqli_num_rows($result) > 0 ) {
                      while ($row = mysqli_fetch_assoc($result) ) {
                          echo "<tr>";
                          echo "<td>" . $row['FeeDNo'] . "</td>";
                          echo "<td>" . $row['Name'] . "</td>";
                          echo "<td>" . $row['Email'] . "</td>";
                          echo "<td>" . $row['Note'] . "</td>";
                          echo "</tr>";
                      }
                  } else {
                      echo "<tr><td colspan='4'>No feedback available</td></tr>";
                  }
                  ?>
                </tbody>
            </table>
        </section>
    </main>
 
</body>
</html>
