<style type="text/css">
	.data-table {
		width: 100%;
		border: solid 1px #ababab;
		border-collapse: collapse;
	}

	.data-table tr.data-header, .data-table tr.data-header:hover {
		background: blue;
		color: white;
		font-size: 14px;
	}

	.data-table td, .data-table th{
		border: solid 1px #ababab;
		padding: 10px;
	}

	.data-table tr:hover {
		background-color: #dedede;
	}

	.data-table.product tr.data-header, .data-table.product tr.data-header:hover {
		background: red;
	}

	.data-table.product tr {
		background-color: #efefef;
	}


</style>
<?php 
	$students = array(
		array('id' => 'A1', 'name' => 'Nguyen Van An', 'address' => 'Hanoi'),
		array('id' => 'A2', 'name' => 'Nguyen Van Binh', 'address' => 'Hanoi'),
		array('id' => 'A3', 'name' => 'Nguyen Van Chung', 'address' => 'Hanoi'),
		array('id' => 'A4', 'name' => 'Nguyen Van Duong', 'address' => 'Hanoi'));
	require 'lib/functions.php';
	//1. In ra bảng danh sách sinh viên với 3 cột id, name, address
	//   | ID  |    Ho ten     |   Dia chi       |
	//   | 1   |Nguye Van An   |   Hanoi         |
	//   | 2   |Nguye Van Binh |   Hanoi         |
	//   | 3   |Nguye Van Chung|   Hanoi         |
	//   | ... |...            |...              |
	//
	//------------------------------------------
	//2. Xây dựng hàm printTable nhận vào mảng 2 chiều và mảng danh sách cột (kèm tiêu đề)
	//
	//Ví dụ:
	printTable($students, 
			array("id" => "Id", "address" => "Dia Chi", "name" => "Ho Ten"));
	echo("<hr/>");
	$products = array(
			array('id' => 'A1', 'name' => 'Khan mat', 'price' => '10000'),
			array('id' => 'A2', 'name' => 'Ao phong', 'price' => '200000'),
			array('id' => 'A3', 'name' => 'Sua tuoi', 'price' => '44000'));
	printTable($products, 
			array("id" => "Id", "name" => "Ten SP", "price" => "Gia"), "product");
?>
