<a href="cat.php">Back to list</a>
<?php 
	require_once("../lib/db.php");
	require("../lib/cat_service.php");

	$conn = db_connect();

	$id = escapeGetParam($conn, "id");

	deleteCat($conn, $id);
	
	header("location:cat.php");
	
	db_close($conn);
?>