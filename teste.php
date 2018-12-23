<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Teste Lâmpada</title>
</head>
<body>

	<div class="div-lampada-off">
		<h1 id="texto"></h1>
	</div>

	<style type="text/css">
		.div-lampada-off {
			margin: auto;
			width: 300px;
			height: 180px;
			background-color: black;
		}
		.div-lampada-off h1 {
			text-align: center;
			color: white;
			padding-top: 20%;
		}
	</style>

	<script type="text/javascript">

		document.getElementById('texto').innerHTML = localStorage.comentario;
		
	</script>

</body>
	<script src="js/teste.js"></script>
</html>