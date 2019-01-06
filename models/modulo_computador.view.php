<?php

include 'configuracao/bd.php';

	global $pdo;

	$sql = "SELECT * FROM modulo_computador";
	$qry = $pdo->query($sql);

	if ($qry->rowCount() > 0) {
		$computadores_view = $qry->fetchAll();
	} else {
		$computadores_view = '0';
	}

	return $computadores_view;

?>