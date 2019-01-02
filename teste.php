<?php

?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Automação Home - Modulo Lâmpadas</title>
	<!-- CSS padrão/default -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css">
	<link rel="stylesheet" type="text/css" href="css/material-switch.css">
	<link rel="stylesheet" type="text/css" href="css/modulo_lampada.css">

	<link rel="stylesheet" type="text/css" href="css/teste.css">

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

	<div class="container">
		<div class="wrapper">
			
			<div class="text">
				<div class="position-div-text">
					<p class="texto-p">Frase/Identificação</p>
				</div>
			</div>
			
			<div class="button-acao">
				<div class="position-div-checkbox">
					<input type="checkbox" class="switch_1" id="button" name="button" value="Ligado[1]" onclick="teste();">
				</div>
			</div>
			
		</div>

		<div class="wrapper">
			
			<div class="text">
				<div class="position-div-text">
					<p class="texto-p">Frase/Identificação</p>
				</div>
			</div>
			
			<div class="button-acao">
				<div class="position-div-checkbox">
					<input type="checkbox" class="switch_1" id="button" name="button" value="Ligado[1]" onclick="teste();">
				</div>
			</div>
			
		</div>
	</div>

	<!-- <input type="checkbox" id="clicado" name="teste" value="1" onclick="teste();"> -->

	<script>
		function teste() {
			var id = document.getElementById('button').value;

			alert(id);
			
		}
	</script>

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
    </script>

    <script>
    	function Animar() {
    		$('#texto').addClass('slideInLeft');
     	}
    </script>
</html>