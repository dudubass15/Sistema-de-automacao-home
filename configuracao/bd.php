<?php

// Pega os parâmetros para logar no banco de dados MySQL.

$dsn = "mysql:dbname=automacao;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch(PDOException $e) {
	echo "Falhou: ".$e->getMessage();
}


?>