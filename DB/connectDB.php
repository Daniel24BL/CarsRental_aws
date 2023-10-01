<?php
	try {
		$conn = new PDO("mysql:host=100.27.24.197;dbname=alquiler","root","admin");
	} catch (PDOException $ex) {
		print_r("Error: ". $ex->getMessage());
		//die($ex->getMessage());
		die();
	}
?>
