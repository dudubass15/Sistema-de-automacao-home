<?php

require '../configuracao/bd.php';

	if(isset($_POST['descricao']) && !empty($_POST['descricao'])) {
		error_reporting(0);

		$descricao = $_POST['descricao'];
		$endereço_ip = $_POST['ip'];
		$nome_utilizador = $_POST['utilizador'];

		add($descricao, $endereço_ip, $nome_utilizador);

	} else{

		header('Location: ../modulo_computador.php');
	}

	function add($descricao, $endereço_ip, $nome_utilizador) {

		global $pdo;

		$sql = "INSERT INTO modulo_computador (descricao, IP, utilizador) VALUES ('$descricao', '$endereço_ip', '$nome_utilizador') ";
		$sql = $pdo->query($sql);

		header('Location: ../modulo_computador.php');
	}

?>