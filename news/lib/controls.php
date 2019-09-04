<?php 
function printTable($data, $columns, $cssClass = "default")
{
	echo("<table class=\"data-table $cssClass\">");
	echo("<tr class=\"data-header\">");
	foreach ($columns as $column) {
		echo ("<th>$column</th>");
	}
	echo("</tr class=\"data-row\">");

	while($row = mysqli_fetch_assoc($data)) {
		echo("<tr>");
		foreach ($columns as $field => $title) {
			echo ("<td>$row[$field]</td>");
		}
		echo ("</tr>");
	}
	
	echo ("</table>");
}
?>