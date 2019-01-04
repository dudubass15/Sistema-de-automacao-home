<?php

include 'configuracao/bd.php';

	global $pdo;

	$sql = "SELECT * FROM modulo_lampada";
	$qry = $pdo->query($sql);

	if ($qry->rowCount() > 0) {
		$lampadas_view = $qry->fetchAll();
	} else {
		$lampadas_view = '0';
	}

	return $lampadas_view;

?>