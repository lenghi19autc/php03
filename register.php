<?php 
require 'lib/functions.php';
if(isset($_POST["register"])) {
	echo("Masv: {$_POST["masv"]} <br/>");
	echo("Họ tên: {$_POST["hoten"]} <br/>");
	echo("Lớp: {$_POST["lop"]} <br/>");
	echo("Giới tính: {$_POST["gt"]} <br/>");
	echo("CLB:");
	printArray($_POST["clb"]);
}
?>
<form method="POST">
	<table>
		<tr>
			<td>Mã SV</td>
			<td><input type="text" name="masv"></td>
		</tr>
		<tr>
			<td>Họ tên</td>
			<td><input type="text" name="hoten"></td>
		</tr>
		<tr>
			<td>Lớp</td>
			<td>
				<select name="lop">
					<option value="1">CNTT1</option>
					<option value="2">CNTT2</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Giới tính</td>
			<td>
				<input type="radio" name="gt" value="0" checked> Nam
				<input type="radio" name="gt" value="1"> Nữ
				<input type="radio" name="gt" value="2"> Khác
			</td>
		</tr>
		<tr>
			<td>CLB</td>
			<td>
				<input type="checkbox" name="clb[]" value="1"> Bóng đá <br/>
				<input type="checkbox" name="clb[]" value="2"> Bóng chuyền <br/>
				<input type="checkbox" name="clb[]" value="3"> Cầu lông <br/>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="register" value="Register">
			</td>
		</tr>
	</table>
</form>