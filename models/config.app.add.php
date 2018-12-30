<?php

require '../configuracao/bd.php';

	if(isset($_POST)) {
		error_reporting(0);

		$modulo_wifi = $_POST['wifi'];
		$modulo_lampada = $_POST['lampada'];
		$modulo_ventilador = $_POST['ventilador'];
		$modulo_musica = $_POST['musica'];
		$modulo_video = $_POST['video'];
		$modulo_assistente = $_POST['assistente'];

		modulos($modulo_wifi, $modulo_lampada, $modulo_ventilador, $modulo_musica, $modulo_video, $modulo_assistente);

	} else{

		header('Location: ../index.php');
	}

	function modulos($modulo_wifi, $modulo_lampada, $modulo_ventilador, $modulo_musica, $modulo_video, $modulo_assistente) {

		global $pdo;

		$array = [$modulo_wifi, $modulo_lampada, $modulo_ventilador, $modulo_musica, $modulo_video, $modulo_assistente];
		$permissao = implode(",", $array);

		// Abaixo código para contar números de linha no banco ...
		$sql = "SELECT COUNT(*) FROM modulos";
		$qry = $pdo->query($sql);

		//Verifica se número de linhas é maior que 0 ...
		if($qry->rowCount() > 0) {
            $array = $qry->fetchAll();
        }

        //Faço verificação se quantidade de linhas for maior que zero eu atualizo a informação ao inserir no bd ...

        //Se for igual ou menor a zero, eu faço a inserção dos dados como se fosse novo ...
        if($array[0][0] > 0){
        	$sql = "UPDATE modulos SET nomes = '$permissao'";
			$sql = $pdo->query($sql);
        } else{
        	$sql = "INSERT INTO modulos (nomes) VALUES ('$permissao')";
			$sql = $pdo->query($sql);
        }

        //Depois desse processo eu envio para a página inicial ...
		header('Location: ../index.php');
	}

?>