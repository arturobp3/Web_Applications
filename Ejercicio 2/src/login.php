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
			<h1> Acceso al sistema </h1>
				<form method="get" action="procesarLogin.php"> 
					<p>
						Name:
						<input type="text" name="usuario"/>
					</p>
					<p>
						Password:
						<input type="password" name="pass"/>
					</p>

					<p>
						<input type="submit" value="Entrar">
					</p>
				</form>
			</div>

			<?php
				require('sidebarDer.php');
				require('pie.php');
			?>

		</div> <!-- Fin del contenedor -->


		
	</body>
</html>


