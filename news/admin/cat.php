<a href="cat_add.php">Add</a>
<?php 
	require("../lib/controls.php");
	require("../lib/db.php");

	$conn = db_connect();

	$result = db_query($conn, "SELECT * FROM cat");

	printTable($result, 
		["title" => "Title", 
		"description" => "Description"],
		"cat_edit.php");

	db_close($conn);
?>