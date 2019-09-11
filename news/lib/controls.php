<?php 
function printTable($data, $columns, $editLink = "", $cssClass = "default")
{
	echo("<table class=\"data-table $cssClass\">");
	echo("<tr class=\"data-header\">");
	foreach ($columns as $column) {
		echo ("<th>$column</th>");
	}
	if($editLink != "") {
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
		
		echo ("</tr>");
	}
	
	echo ("</table>");
}
?>