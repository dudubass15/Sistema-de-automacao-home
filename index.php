<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gerenciador</title>
	<!-- CSS padrão/default -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css">
	<link rel="stylesheet" type="text/css" href="css/material-switch.css">

	<!-- CSS Aplicado para a configuração da aplicação --->
	<link rel="stylesheet" type="text/css" href="css/config.app.css">

	<!-- Animação de carregamento das páginas -->
	<link rel="stylesheet" type="text/css" href="css/loadpage.css">

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

	<!-- Fonts Google -->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

</head>
<body>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	    	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	        </button>
		    <a class="navbar-brand" href="#">
		    	<img alt="Brand" src="bootstrap.png" style="width: 40px; margin-top: -10px;">
		    </a>
	    </div>

	    <div id="navbar" class="navbar-collapse collapse">
	    	<ul class="nav navbar-nav navbar-right">
            	<li>
            		<button type="button" class="btn btn-default">Sair
            		<span class="glyphicon glyphicon-log-in"></span></button>
        		</li>
        	</ul>
	   	</div>

	  </div>
	</nav>

	<div class="container">

		<div id="preloader">
			<div id="status">
				<div class="sk-three-bounce">
				  <div class="sk-child sk-bounce1"></div>
				  <div class="sk-child sk-bounce2"></div>
				  <div class="sk-child sk-bounce3"></div>
				</div>
			</div>
		</div>

		<div class="jumbotron" id="area-menu">

			<!-- Button Casa/Home -->
			<a href="index.php">
				<div class="jumbotron" id="area-button">
					<div class="button-painel">
						<img src="icon/home.png" title="Home">
					</div>
				</div>
			</a>

			<!-- Button Wifi -->
			<a href="#" class="active">
				<div class="jumbotron" id="area-button">
					<div class="button-painel">
						<img src="icon/wifi.png" title="Wifi">
					</div>
				</div>
			</a>

			<!-- Button Lâmpada/Energia -->
			<a href="#">
				<div class="jumbotron" id="area-button">
					<div class="button-painel">
						<img src="icon/idea.png" title="Lâmpada">
					</div>
				</div>
			</a>

			<!-- Button GPS/Localização -->
			<a href="#">
				<div class="jumbotron" id="area-button">
					<div class="button-painel">
						<img src="icon/placeholder.png" title="GPS">
					</div>
				</div>
			</a>

			<!-- Button Reprodutor de Música -->
			<a href="#">
				<div class="jumbotron" id="area-button">
					<div class="button-painel">
						<img src="icon/music-player.png" title="Reprodutor de Música">
					</div>
				</div>
			</a>

			<!-- Button Reprodutor de Vídeo -->
			<a href="#">
				<div class="jumbotron" id="area-button">
					<div class="button-painel">
						<img src="icon/video-player.png" title="Reprodutor de Vídeo">
					</div>
				</div>
			</a>

			<!-- Button Microphone -->
			<a href="#">
				<div class="jumbotron" id="area-button">
					<div class="button-painel">
						<img src="icon/microphone.png" title="Assistente Virtual">
					</div>
				</div>
			</a>

			<!-- Button Configuração -->
			<a href="#">
				<div class="jumbotron" id="area-button" data-toggle="modal" data-target=".bs-example-modal-sm">
					<div class="button-painel">
						<img src="icon/settings.png" title="Configuração">
					</div>
				</div>
			</a>

			<!-- Modal -->
			<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
			  <div class="modal-dialog modal-sm" role="document">
			    <div class="modal-content" id="modal-content-corpo">
			    	<div class="modal-header">
			    		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

				  		<h3>Configuração</h3>

				  		<li class="list-group-item" id="config-button">
	                        Módulo Wifi
	                        <div class="material-switch pull-right">
	                            <input id="someSwitchOptionDanger1" name="someSwitchOption001" type="checkbox"/>
	                            <label for="someSwitchOptionDanger1" class="label-danger"></label>
	                        </div>
	                    </li>

				  		<li class="list-group-item" id="config-button">
	                        Módulo Lâmpada
	                        <div class="material-switch pull-right">
	                            <input id="someSwitchOptionDanger2" name="someSwitchOption002" type="checkbox"/>
	                            <label for="someSwitchOptionDanger2" class="label-danger"></label>
	                        </div>
	                    </li>

				  		<li class="list-group-item" id="config-button">
	                        Módulo GPS
	                        <div class="material-switch pull-right">
	                            <input id="someSwitchOptionDanger3" name="someSwitchOption003" type="checkbox"/>
	                            <label for="someSwitchOptionDanger3" class="label-danger"></label>
	                        </div>
	                    </li>

				  		<li class="list-group-item" id="config-button">
	                        Módulo Reprodutor de Música
	                        <div class="material-switch pull-right">
	                            <input id="someSwitchOptionDanger4" name="someSwitchOption004" type="checkbox"/>
	                            <label for="someSwitchOptionDanger4" class="label-danger"></label>
	                        </div>
	                    </li>

	                    <li class="list-group-item" id="config-button">
	                        Módulo Reprodutor de Vídeo
	                        <div class="material-switch pull-right">
	                            <input id="someSwitchOptionDanger5" name="someSwitchOption005" type="checkbox"/>
	                            <label for="someSwitchOptionDanger5" class="label-danger"></label>
	                        </div>
	                    </li>

	                    <li class="list-group-item" id="config-button">
	                        Módulo Assistente Virtual
	                        <div class="material-switch pull-right">
	                            <input id="someSwitchOptionDanger6" name="someSwitchOption006" type="checkbox"/>
	                            <label for="someSwitchOptionDanger6" class="label-danger"></label>
	                        </div>
	                    </li>
	                </div>
			    </div>
			  </div>
			</div>

		</div>

	</div>

	<footer class="footer navbar navbar-default" id="footer-rodape">
	    <div class="container">
	    	<p class="text-muted">2018 Automação Home, Inc.</p>
	    </div>
	</footer>

</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

    <script type="text/javascript">
    	jQuery(window).load(function() {
    		jQuery("status").fadeOut();

    		jQuery("#preloader").delay(1000).fadeOut("slow");
    	})
    </script>
</html>