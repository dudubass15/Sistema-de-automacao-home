<?php

include 'configuracao/bd.php';

	$dsn = "mysql:dbname=automacao;host=localhost";
	$dbuser = "root";
	$dbpass = "";

	try {
		$pdo = new PDO($dsn, $dbuser, $dbpass);
	} catch(PDOException $e) {
		echo "Falhou: ".$e->getMessage();
	}

	$sql = "SELECT nomes FROM modulos";
	$qry = $pdo->query($sql);

	if ($qry->rowCount() > 0) {
		$permissao_config = $qry->fetchAll();

		$array_permissao_config = explode(',', $permissao_config[0]['nomes']);
	}

	return $array_permissao_config;

?>