<a href="cat.php">Back to list</a>
<?php 
	require("../lib/db.php");
	require("../lib/cat_service.php");

	if(isset($_POST["add"])) {
		$conn = db_connect();

		createCat($conn, 
			escapePostParam($conn, "title"), 
			escapePostParam($conn,"description"));
		
		echo("Tin '$title' thêm thành công");

		mysqli_close($conn);
	}
?>
<form method="POST">
	<table>
		<tr>
			<td>Title</td>
			<td><input type="text" name="title" required></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><textarea name="description"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="add" value="Add"></td>
		</tr>
	</table>	
</form>