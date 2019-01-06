<?php

require '../configuracao/bd.php';

	if(isset($_GET)) {
		$id = $_GET['id'];
		del($id);
	}

	function del($id) {
		global $pdo;

		$sql = "DELETE FROM modulo_computador WHERE id = $id ";
		$sql = $pdo->query($sql);

		header('Location: ../modulo_computador.php');
	}


?>