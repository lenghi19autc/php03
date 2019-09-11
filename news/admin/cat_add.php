<a href="cat.php">Back to list</a>
<?php 
	require("../lib/db.php");

	if(isset($_POST["add"])) {
		$title = $_POST["title"];
		$description = $_POST["description"];

		$conn = connect();

		$result = mysqli_query($conn, "INSERT INTO `cat`(`title`, `description`) VALUES ('$title', '$description')");
		if(!$result) {
			die("Error execute query: " . mysqli_error($conn));
		}
		else {
			echo("Tin '$title' thêm thành công");
		}

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