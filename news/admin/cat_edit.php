<a href="cat.php">Back to list</a>
<?php 
	require_once("../lib/db.php");
	require("../lib/cat_service.php");

	$conn = db_connect();

	$id = escapeGetParam($conn, "id");

	if(isset($_POST["edit"])) {
		updateCat($conn, $id, 
			escapePostParam($conn, "title"), 
			escapePostParam($conn, "description"));
		
		echo("Tin sửa thành công");
	}

	$row = getCat($conn, $id);
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
			<td>
				<input type="submit" name="edit" value="Edit">
				<?php 
					$newsCount = newsCountOfCat($conn, $id);
					if($newsCount == 0) {
						echo("<a href='cat_delete.php?id=$id' onclick=\"confirm('Are you sure?')\">Delete</a>");
					}
					db_close($conn);
				 ?>
			</td>
		</tr>
	</table>	
</form>

