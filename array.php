<?php 
	$i[] = 0;
	$i[] = 1;
	$i[8] = 2;
	$i[6] = 3;
	$i["name"] = "N02";
	$i[] = 5;

	echo($i[9] . "<br/>");

	$i2 = array(0, 1, 8 => 2,
		6 => 3, "name" => "N02", 5);
	echo($i2[6]);
	echo("<br/>");
	echo("Hello {$i2["name"]}, welcome to PHP");
?>
<hr/>
<h1>Print array (1)</h1>
<table>
	<tr>
		<td>Key</td>
		<td>Value</td>
	</tr>
<?php 
	foreach ($i as $k => $v) {
		echo("<tr>
				<td>$k</td>
				<td>$v</td>
			</tr>");
	}
?>
</table>
<hr/>
<h1>Print array (2)</h1>
<table>
	<tr>
		<td>Key</td>
		<td>Value</td>
	</tr>
<?php foreach ($i as $k => $v) { ?>
		<tr>
			<td><?=$k?></td>
			<td><?=$v?></td>
		</tr>
<?php } ?>
</table>