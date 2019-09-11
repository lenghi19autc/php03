<?php 
require 'conf.php';

function connect() {
	global $conf;
	$conn = mysqli_connect($conf["host"], $conf["user"], $conf["password"], $conf["db"]) or die("Cannot connect to db: " . mysqli_connect_error());
	mysqli_set_charset($conn, "utf8");

	return $conn;
}


?>