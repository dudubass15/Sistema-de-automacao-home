<?php

	include 'models/horario.php';
	include 'models/config.app.view.php';
	include 'models/modulo_computador.view.php';

	if(!in_array('computador', $array_permissao_config)){
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
	} else {
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

?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Automação Home - Modulo Computador</title>
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
		    <a class="navbar-brand" href="index.php">
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
	</nav>
	
	<br>

	<div class="container">

		<div class="alert alert-danger" role="alert" id="msg">
		  <p><strong>Ops!</strong> Você não ativou o módulo de computador nas configurações. :(</p>
		</div>

		<div class="corpo-teste animated" id="texto">

			<div class="cabeçalho-modulo">
				<h1>Módulo Computadores</h1>
		        <a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
		          <span class="glyphicon glyphicon-plus"></span> Novo 
		        </a>
			</div>

			<br>

			<?php 
				if($computadores_view == '0') {
					echo '
					<div class="alert alert-info" role="alert" >
						<p><strong>Não existe nenhum aparelho cadastrado para acionar !</strong></p>
					</div>
					';
				}
			?>

            <?php foreach($computadores_view as $c): ?>
            	<form method="POST">
            		<li class="list-group-item" id="config-button">
            		    <?php echo($c['descricao']); ?>
            		    <div class="material-switch pull-right" id="button-action">
            		        <input id="<?php echo($c['id']); ?>" type="checkbox" onclick="alternarLamp(this.checked);"/>
            		        <label for="<?php echo($c['id']); ?>" class="label-danger"></label>

            		        <a href="modulo_computador_edit.php?id=<?php echo($c['id']); ?>">
            		        	<span class="glyphicon glyphicon-edit"></span>
            		        </a>

            		        <a href="models/modulo_computador.del.php?id=<?php echo($c['id']); ?>">
            		        	<span class="glyphicon glyphicon-trash"></span>
            		        </a>
            		    </div>
            		</li>
            	</form>
			<?php endforeach; ?>

		</div>
	    

		<!-- Modal para cadastro de nova lâmpada -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="exampleModalLabel">Novo Cadastro</h4>
					</div>
					<div class="modal-body">
						<form method="POST" action="models/modulo_computador.add.php">
							<div class="form-group">
								<label for="descricao" class="control-label">Descricao:</label>
								<input type="text" class="form-control" id="descricao" name="descricao">
                            </div>
                            
                            <div class="form-group">
								<label for="ip" class="control-label">IP:</label>
								<input type="text" class="form-control" id="ip" name="ip">
                            </div>
                            
                            <div class="form-group">
								<label for="utilizador" class="control-label">Utilizador(a):</label>
								<input type="text" class="form-control" id="utilizador" name="utilizador">
							</div><br>

							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
								<button type="submit" class="btn btn-primary">Salvar</button>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
		<!-- Fim do Modal -->
	
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
	
	<script src="js/acionamento_lampada.js"></script>

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