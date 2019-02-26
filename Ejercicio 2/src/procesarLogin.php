<?php session_start(); ?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilo.css" />
		<meta charset="utf-8">
		<title>Portada</title>
	</head>
	<body>

		<?php

			$usuario = $_REQUEST["usuario"];
			$pass = $_REQUEST["pass"];

			if(($usuario == "user" && $pass == "userpass")){
				$_SESSION["login"] = true;
				$_SESSION["nombre"] = "Usuario";
				$_SESSION["esAdmin"] = false;
			}

			else if($usuario == "admin" && $pass == "adminpass"){
				$_SESSION["login"] = true;
				$_SESSION["esAdmin"] = true;
				$_SESSION["nombre"] = "Administrador";
			}
			else{
				$_SESSION["login"] = false;
			}

		?>
		<div id="contenedor">

			<?php 
				require('cabecera.php');
				require('sidebarIzq.php');
			?>

			<div id="contenido">
				
				<?php
					if(($usuario == "user" && $pass == "userpass")){
						echo "<h1>Bienvenido Usuario</h1>";
						echo "<p>Usa el menu de la izquierda para navegar</p>";
					}
					else if($usuario == "admin" && $pass == "adminpass"){
						echo "<h1>Bienvenido Administrador</h1>";
						echo "<p>Usa el menu de la izquierda para navegar</p>";	
					}
					else{
						echo "<h1>ERROR</h1>";
						echo "<p>El usuario o contraseña no son validos</p>";
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