<a href="cat_add.php">Add</a>
<?php 
	require("../lib/controls.php");

	$conn = mysqli_connect("localhost", "root", "", "n02") or die("Cannot connect to db: " . mysqli_connect_error());
	mysqli_set_charset($conn, "utf8");

	$result = mysqli_query($conn, "SELECT * FROM cat");
	if(!$result) {
		die("Error execute query: " . mysqli_error($conn));
	}

	printTable($result, 
		["title" => "Title", 
		"description" => "Description"]);

	mysqli_close($conn);
?>