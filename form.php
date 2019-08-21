<?php
if(isset($_POST["insert"])) {
	echo($_POST["username"]);
}
?>
<form method="POST">
	<input type="text" name="username">
	<input type="submit" name="insert" value="Add">
</form>