<?php

require '../configuracao/bd.php';

	if(isset($_GET)) {
		$id = $_GET;
		$descricao = $_POST['descricao'];
		$endereço_ip = $_POST['ip'];
		$nome_utilizador = $_POST['utilizador'];

		// Converto a o númeor da ID que estar em array para string ...
		$id_string = implode('', $id);

		edit($id_string, $descricao, $endereço_ip, $nome_utilizador);
	}

	function edit($id_string, $descricao, $endereço_ip, $nome_utilizador) {
		global $pdo;

		$sql = "UPDATE modulo_computador SET descricao = '$descricao', IP = '$endereço_ip', utilizador = '$nome_utilizador' WHERE id = $id_string ";
		$sql = $pdo->query($sql);

		header('Location: ../modulo_computador.php');
	}
	
?>