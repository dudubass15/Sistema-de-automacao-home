<?php

	include 'models/config.app.view.php';

	//print_r($array_permissao_config); die;

	if(!in_array('video', $array_permissao_config)){
		//header('Location: index.php');

		echo
			"<style>
				#area-video {
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
		</style>";
	}

?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Automação Home</title>
	<!-- CSS padrão/default -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/video.css">

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
            		<p id="menu-hr"></p>
        		</li>
        	</ul>
	   	</div>

	  </div>
	</nav>

	<div id="icon-voltar">
		<a href="index.php">
			<img src="icon/return.png" width="40" title="Retornar">
		</a>
	</div><br>

	<div class="container">

		<div class="alert alert-danger" role="alert" id="msg">
		  <p><strong>Ops!</strong> Você não ativou o módulo de reprodução de vídeo nas configurações. :(</p>
		</div>

		<div id="area-video">

			<div id="div-video">
				<video width="100%" height="350" controls>
					<source src="multimidias/videos/teste.mp4" type="video/mp4">
					<source src="multimidias/videos/teste.ogg" type="video/ogg">
				</video>
			</div>

			<div id="div-diretorio">
				<?php

					$dir = "multimidias/videos";
					$diretorio = dir($dir);
					 
					echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";
					while($arquivo = $diretorio -> read()){
					echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
					}
					$diretorio -> close();
					

				?>
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

    <script src="js/horario.js"></script>

    <script src="js/ajax_modal.js"></script>

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

    <script type="text/javascript">
    	jQuery(window).load(function() {
    		jQuery("status").fadeOut();

    		jQuery("#preloader").delay(1000).fadeOut("slow");
    	})
    </script>
</html>