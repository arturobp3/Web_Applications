<?php session_start(); ?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilo.css" />
		<meta charset="utf-8">
		<title>Portada</title>
	</head>
	<body>
		<div id="contenedor">

			<?php 
				unset($_SESSION["login"]);
				unset($_SESSION["nombre"]);
				unset($_SESSION["esAdmin"]);
				
				session_destroy();

				require('cabecera.php');
				require('sidebarIzq.php');
			?>

			<div id="contenido">
				
				<h1> Hasta pronto! </h1>
			
			</div>

			<?php 
				require('sidebarDer.php');
				require('pie.php');
			?>

		</div>	

	</body>
</html>