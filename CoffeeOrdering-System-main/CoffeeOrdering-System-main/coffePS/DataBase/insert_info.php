<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Guest</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>

	<?php
	require_once("config.php");




	// Insert Customers 1
	$sql1 = "INSERT INTO Customers(username, password ) VALUES ('Majd',12345)";

	if (mysqli_query($conn, $sql1)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
	}

	// Insert Customers 2
	$sql2 = "INSERT INTO Customers(username, password ) VALUES ('Saleh',112211)";

	if (mysqli_query($conn, $sql2)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
	}





	// Insert Admin 1
	$sql3 = "INSERT INTO admins(username, password ) VALUES ('Abdullah',05311)";

	if (mysqli_query($conn, $sql3)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
	}

	// Insert Admin 2
	$sql4 = "INSERT INTO admins(username, password ) VALUES ('Yagoob',12221)";

	if (mysqli_query($conn, $sql4)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
	}



	mysqli_close($conn);
	?>


</body>

</html>