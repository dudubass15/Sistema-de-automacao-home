<?php

include 'configuracao/bd.php';

	global $pdo;

	$sql = "SELECT * FROM modulo_lampada";
	$qry = $pdo->query($sql);

	if ($qry->rowCount() > 0) {
		$lampadas_view = $qry->fetchAll();
	}

	return $lampadas_view;

?>