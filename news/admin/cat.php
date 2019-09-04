<?php 
	$conn = mysqli_connect("localhost", "root", "", "n02") or die("Cannot connect to db: " . mysqli_connect_error());
	mysqli_set_charset($conn, "utf8");

	$result = mysqli_query($conn, "SELECT * FROM cat");
	if(!$result) {
		die("Error execute query: " . mysqli_error($conn));
	}

	while($row = mysqli_fetch_assoc($result)) {
		echo($row["title"]);
	}

	mysqli_close($conn);
?>