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
				require('cabecera.php');
				require('sidebarIzq.php');
			?>

			<div id="contenido">

				<?php
					if(isset($_SESSION["login"]) && isset($_SESSION["esAdmin"])){
						if($_SESSION["login"] && $_SESSION["esAdmin"]){

							echo "<h1> Consola de administracion </h1>";
							echo "<p>Aqui estarian todos los controles de administracion</p>";
						}

						else {
							echo "<h1> Acceso denegado!</h1>";
							echo "<p>No tienes permisos suficientes para administrar la web</p>";
						}
					}
					else{
						echo "<h1> Acceso denegado!</h1>";
						echo "<p>No tienes permisos suficientes para administrar la web</p>";
					}
				?>
				
			</div>

			<?php 
				require('sidebarDer.php');
				require('pie.php');
			?>

		</div>	

	</body>
</html>
