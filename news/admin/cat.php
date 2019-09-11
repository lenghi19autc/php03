<a href="cat_add.php">Add</a>
<?php 
	require("../lib/controls.php");
	require("../lib/db.php");

	$conn = connect();

	$result = mysqli_query($conn, "SELECT * FROM cat");
	if(!$result) {
		die("Error execute query: " . mysqli_error($conn));
	}

	printTable($result, 
		["title" => "Title", 
		"description" => "Description"],
		"cat_edit.php");

	mysqli_close($conn);
?>