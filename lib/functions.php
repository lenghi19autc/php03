<?php 
function printArray($a){
	echo("<table>
	<tr>
		<td>Key</td>
		<td>Value</td>
	</tr>");
	foreach ($a as $k => $v) {
		echo("<tr>
				<td>$k</td>
				<td>$v</td>
			</tr>");
	}
	echo("</table>");
}

function printTable($data, $columns, $cssClass = "default")
{
	echo("<table class=\"data-table $cssClass\">");
	echo("<tr class=\"data-header\">");
	foreach ($columns as $column) {
		echo ("<th>$column</th>");
	}
	echo("</tr class=\"data-row\">");
	foreach ($data as $row) {
		echo("<tr>");
		foreach ($columns as $field => $title) {
			echo ("<td>$row[$field]</td>");
		}
		echo ("</tr>");
	}
	echo ("</table>");
}
?>