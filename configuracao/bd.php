<?php

	// Pega os parâmetros para logar no banco de dados MySQL.

	$dsn = "mysql:dbname=automacao;host=localhost";
	$dbuser = "";
	$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
		return $pdo;
	} catch(PDOException $e) {
		echo "Falhou: ".$e->getMessage();
	}

?>
