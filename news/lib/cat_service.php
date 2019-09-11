<?php
require 'db.php';

function getAllCat($conn) {
	return db_query($conn, "SELECT * FROM cat");
}

function createCat($title, $description) {
	//btvn
}

function updateCat($id, $title, $description) {
	//btvn
}

function getCat($id) {
	//btvn
}


 ?>