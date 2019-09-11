<a href="cat.php">Back to list</a>
<?php 
	require("../lib/db.php");

	$conn = db_connect();

	$id = $_GET["id"];

	if(isset($_POST["edit"])) {
		$title = $_POST["title"];
		$description = $_POST["description"];

		db_query($conn, "UPDATE `cat` SET `title`='$title',`description`='$description' WHERE id = $id");
		
		echo("Tin sửa thành công");
	}

	$row = db_single($conn, "SELECT * FROM cat WHERE id = $id");
	
	db_close($conn);
?>
<form method="POST">
	<table>
		<tr>
			<td>Title</td>
			<td><input type="text" name="title" required value="<?=$row["title"]?>"></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><textarea name="description"><?=$row["description"]?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="edit" value="Edit"></td>
		</tr>
	</table>	
</form>