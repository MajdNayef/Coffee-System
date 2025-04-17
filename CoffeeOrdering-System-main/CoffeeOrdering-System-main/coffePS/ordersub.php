<?php
$cookie_name = "Name";
$cookie_value = "Saleh";

// Check if the cookie is already set
if (!isset($_COOKIE[$cookie_name])) {
  // Setting the cookie
  setcookie($cookie_name, $cookie_value, time() + 3600);
}

// Retrieving the cookie value
$searchValue = isset($_COOKIE[$cookie_name]) ? $_COOKIE[$cookie_name] : '';

?>

<!DOCTYPE html>
<html lang="en" title="Coding">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order table</title>
    <link rel="stylesheet" href="ordersub.css">
</head>

<body>
    <main class="table">
        <section class="table__header">
            <h1>Customer's Orders</h1>
            <div class="input-group">
                <!-- <input type="search" placeholder="Search Data..."> -->
                <input type="search" placeholder="Search Data..." value="<?php echo $searchValue; ?>">
                <img src="images/search.png" alt="">
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Customer <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Location <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Order Date <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Amount <span class="icon-arrow">&UpArrow;</span></th>
                        <th> FeedBack <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> <img src="images/saleh.jpg" alt="">Saleh</td>
                        <td> Johor </td>
                        <td> 24 jun, 2023 </td>
                        <td>
                            <button class="status delivered">Done</button>
                        </td>                        
                        <td> <strong> $30.0 </strong></td>
                        <td> <strong> <a href="feedback.php">FeedBack</a> </strong></td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td><img src="images/majd.jpg" alt=""> Majd </td>
                        <td> Johor </td>
                        <td> 25 jun, 2023 </td>
                        <td>
                            <button class="status cancelled">Done</button>
                        </td>
                        <td> <strong>$40.0</strong> </td>
                        <td> <strong> <a href="feedback.php">FeedBack</a> </strong></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    <script src="ordersub.js">
    </script>
</body>

</html>