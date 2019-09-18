<?php 
function printTable($data, $columns, $editLink = "", $deleteLink = "", $deleteCondition = null, $cssClass = "default")
{
	echo("<table class=\"data-table $cssClass\">");
	echo("<tr class=\"data-header\">");
	foreach ($columns as $column) {
		echo ("<th>$column</th>");
	}
	if($editLink != "") {
		echo("<td></td>");
	}
	if($deleteLink != "") {
		echo("<td></td>");
	}

	echo("</tr class=\"data-row\">");

	while($row = mysqli_fetch_assoc($data)) {
		echo("<tr>");
		foreach ($columns as $field => $title) {
			echo ("<td>$row[$field]</td>");
		}
		if($editLink != "") {
				echo("<td><a href=\"$editLink?id={$row["id"]}\">Edit</a></td>");	
		}

		if($deleteLink != "") {
				$result = 0;
				if($deleteCondition)  {
					$result = $deleteCondition($row["id"]);
				}

				if($result == 0) {
					echo("<td><a href=\"$deleteLink?id={$row["id"]}\" onclick=\"return confirm('Are you sure?')\">Delete</a></td>");	
				}
				else {
					echo("<td>Cannot delete category contains news</td>");
				}
		}
		
		echo ("</tr>");
	}
	
	echo ("</table>");
}
?>