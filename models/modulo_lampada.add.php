<?php

require '../configuracao/bd.php';

	if(isset($_POST['descricao']) && !empty($_POST['descricao'])) {
		error_reporting(0);

		$descricao = $_POST['descricao'];

		add($descricao);

	} else{

		header('Location: ../modulo_lampadas.php');
	}

	function add($descricao) {

		global $pdo;

    	$sql = "INSERT INTO modulo_lampada (descricao) VALUES ('$descricao')";
		$sql = $pdo->query($sql);

		header('Location: ../modulo_lampadas.php');
	}

?>