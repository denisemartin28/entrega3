<?php

	$user = 'root';
	$pass = '';

	try {
		$connection = new PDO(
			"mysql:host=localhost; dbname=movies_db; charset=utf8mb4",
			$user,
			$pass,
			[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
		);
	} catch (PDOException $exception) {
		echo $exception->getMessage();
	}
