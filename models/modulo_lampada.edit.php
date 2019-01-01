<?php

require '../configuracao/bd.php';

	if(isset($_POST)) {
		$id = $_POST['id'];
		$descricao = $_POST['descricao'];

		edit($id, $descricao);
	}

	function edit($id, $descricao) {
		global $pdo;

		$sql = "UPDATE modulo_lampada SET descricao = '$descricao' WHERE id = $id ";
		$sql = $pdo->query($sql);

		header('Location: ../modulo_lampadas.php');
	}


?>