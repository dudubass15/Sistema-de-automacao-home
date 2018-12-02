<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gerenciador</title>
	<!-- CSS padrão/default -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

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
            	<li><button type="button" class="btn btn-default">Sair</button></li>
        	</ul>
	   	</div>

	  </div>
	</nav>

	<div class="container">

		<div class="jumbotron" id="area-menu">

			<!-- Button Casa/Home -->
			<div class="jumbotron" id="area-button">
				<div class="button-painel">
					<img src="icon/home.png" title="Home">
				</div>
			</div>

			<!-- Button Wifi -->
			<div class="jumbotron" id="area-button">
				<div class="button-painel">
					<img src="icon/wifi.png" title="Wifi">
				</div>
			</div>

			<!-- Button Lâmpada/Energia -->
			<div class="jumbotron" id="area-button">
				<div class="button-painel">
					<img src="icon/idea.png" title="Lâmpada">
				</div>
			</div>

			<!-- Button GPS/Localização -->
			<div class="jumbotron" id="area-button">
				<div class="button-painel">
					<img src="icon/placeholder.png" title="GPS">
				</div>
			</div>

			<!-- Button Reprodutor de Música -->
			<div class="jumbotron" id="area-button">
				<div class="button-painel">
					<img src="icon/music-player.png" title="Reprodutor de Música">
				</div>
			</div>

			<!-- Button Reprodutor de Vídeo -->
			<div class="jumbotron" id="area-button">
				<div class="button-painel">
					<img src="icon/video-player.png" title="Reprodutor de Vídeo">
				</div>
			</div>

			<!-- Button Microphone -->
			<div class="jumbotron" id="area-button">
				<div class="button-painel">
					<img src="icon/microphone.png" title="Assistente Virtual">
				</div>
			</div>

			<!-- Button Configuração -->
			<div class="jumbotron" id="area-button">
				<div class="button-painel">
					<img src="icon/settings.png" title="Configuração">
				</div>
			</div>

		</div>

	</div>

	<footer class="footer" id="footer-rodape">
	    <div class="container">
	    	<p class="text-muted">2018 Company, Inc.</p>
	    </div>
	</footer>

</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</html>