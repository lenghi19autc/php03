<a href="cat_add.php">Add</a>
<?php 
	require("../lib/controls.php");
	require_once("../lib/db.php");
	require("../lib/cat_service.php");

	$conn = db_connect();

	$result = getAllCat($conn);;

	printTable($result, 
		["title" => "Title", 
		"description" => "Description"],
		"cat_edit.php");

	db_close($conn);
?>