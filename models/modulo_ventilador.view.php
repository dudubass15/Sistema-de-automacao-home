<?php

include 'configuracao/bd.php';

	global $pdo;

	$sql = "SELECT * FROM modulo_ventilador";
	$qry = $pdo->query($sql);

	if ($qry->rowCount() > 0) {
		$ventilador_view = $qry->fetchAll();
	} else {
		$ventilador_view = '0';
	}

	return $ventilador_view;

?>