<?php

	include 'models/horario.php';
	include 'models/config.app.view.php';
    include 'models/modulo_lampada.view.php';
    //include 'models/modulo_lampada.edit.php';

	if(!in_array('lampada', $array_permissao_config)){
		//header('Location: index.php');

		echo
			"<style>
				#texto {
					display: none;
				}
				#msg {
					margin-top: 10%;
					text-align: center;
				}
			</style>";
		
	} else{
		echo
            "<style>
                #msg {
                    display: none;
                }
                .label-danger {
                    margin-top: 10px;
            }
            </style>";
    }
    
    if(isset($_GET)) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM modulo_lampada WHERE id = $id";
        $qry = $pdo->query($sql);

        if ($qry->rowCount() > 0) {
            $lampadas_edit = $qry->fetchAll();
        }
    }

?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Automação Home - Modulo Lâmpadas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS padrão/default -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css">
	<link rel="stylesheet" type="text/css" href="css/material-switch.css">
	<link rel="stylesheet" type="text/css" href="css/modulo_lampada.css">

	<!-- CSS Aplicado para a configuração da aplicação --->
	<link rel="stylesheet" type="text/css" href="css/config.app.css">

	<!-- Animação de carregamento das páginas -->
	<link rel="stylesheet" type="text/css" href="css/loadpage.css">

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

	<!-- Animação de transição de uma página para outra -->
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">

	<!-- Fonts Google -->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>
<body onload="return Animar()">

    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="modulo_lampadas.php">
                <button type="button" class="btn btn-light" style="margin-top: -8px; text-decoration: none;">Voltar</button>
            </a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <p id="menu-hr"></p>
                </li>
            </ul>
        </div>

    </div>
    </nav><br>

    <div class="container">

        <div class="alert alert-danger" role="alert" id="msg">
        <p><strong>Ops!</strong> Você não ativou o módulo de lâmpada nas configurações. :(</p>
        </div>

        <div class="corpo-teste animated" id="texto">

            <div class="cabeçalho-modulo">
                <h1>Módulo Lâmpada - Editar</h1>
            </div>

            <br>

            <form method="POST" action="models/modulo_lampada.edit.php?id=<?php echo($lampadas_edit[0]['id']); ?>">
                <div class="form-group">
                    <label for="exampleInputDescricao">Descrição</label>
                    <input type="text" class="form-control" id="exampleInputDescricao" name="descricao" value="<?php echo($lampadas_edit[0]['descricao']); ?>">
                    <small id="descricaoHelp" class="form-text text-muted">Identificação do sensor no ambiente onde foi instalado.</small>
                </div>

                <br>

                <div style="width: 100%; height: 35px;">
                    <div style="width: 70px; height: 35px; margin: auto;">
                        <button type="submit" class="btn btn-primary" style="margin: 2px;">Salvar</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <footer class="footer navbar navbar-default" id="footer-rodape">
        <div class="container">
            <p class="text-muted"><?php echo date('Y'); ?> Automação Home, Inc.</p>
        </div>
    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script src="js/horario.js"></script>

    <script src="js/ajax_modal.js"></script>

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

    <script type="text/javascript">
    	jQuery(window).load(function() {
    		jQuery("status").fadeOut();

    		jQuery("#preloader").delay(1000).fadeOut("slow");
		})
		
		function Animar() {
			$('#texto').addClass('slideInLeft');
		}
    </script>
</html>