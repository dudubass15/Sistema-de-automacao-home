<?php

require '../configuracao/bd.php';

	if(isset($_GET)) {
		$id = $_GET;
		$descricao = $_POST['descricao'];

		// Converto a o númeor da ID que estar em array para string ...
		$id_string = implode('', $id);

		edit($id_string, $descricao);
	}

	function edit($id_string, $descricao) {
		global $pdo;

		$sql = "UPDATE modulo_lampada SET descricao = '$descricao' WHERE id = $id_string ";
		$sql = $pdo->query($sql);

		header('Location: ../modulo_lampadas.php');
	}
	
?>