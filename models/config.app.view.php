<?php

include 'configuracao/bd.php';

	global $pdo;

	$sql = "SELECT nomes FROM modulos";
	$qry = $pdo->query($sql);

	if ($qry->rowCount() > 0) {
		$permissao_config = $qry->fetchAll();

		$array_permissao_config = explode(',', $permissao_config[0]['nomes']);
	}

	return $array_permissao_config;

?>