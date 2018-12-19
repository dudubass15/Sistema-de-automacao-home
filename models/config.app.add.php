<?php

include '../configuracao/bd.php';

	if(isset($_POST['wifi']) && !empty($_POST['wifi'])) {
		error_reporting(0);

		$modulo_wifi = $_POST['wifi'];
		$modulo_lampada = $_POST['lampada'];
		$modulo_gps = $_POST['gps'];
		$modulo_musica = $_POST['musica'];
		$modulo_video = $_POST['video'];
		$modulo_assistente = $_POST['assistente'];

		add($modulo_wifi, $modulo_lampada, $modulo_gps, $modulo_musica, $modulo_video, $modulo_assistente);

	} else{

		header('Location: ../index.php');

	}

	function add($modulo_wifi, $modulo_lampada, $modulo_gps, $modulo_musica, $modulo_video, $modulo_assistente) {

		$array = [$modulo_wifi, $modulo_lampada, $modulo_gps, $modulo_musica, $modulo_video, $modulo_assistente];
		$permissao = implode(",", $array);

		$dsn = "mysql:dbname=automacao;host=localhost";
		$dbuser = "root";
		$dbpass = "";

		try {
			$pdo = new PDO($dsn, $dbuser, $dbpass);
		} catch(PDOException $e) {
			echo "Falhou: ".$e->getMessage();
		}

		$sql = "INSERT INTO modulos (nomes) VALUES ('$permissao')";
		$sql = $pdo->query($sql);

		header('Location: ../index.php');
	}

?>