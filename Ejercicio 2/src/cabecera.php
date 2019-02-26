<html>
	<body>

		<div id="cabecera">
			<h1>Mi gran página web</h1>

			<div class="saludo">

				<?php
					if(isset($_SESSION["login"]) && isset($_SESSION["esAdmin"])){

						if($_SESSION["login"] && $_SESSION["esAdmin"]){
							echo "Bienvenido, Administrador. (<a href='logout.php'>salir</a>)";
						}

						else if($_SESSION["login"] && !$_SESSION["esAdmin"]){
							echo "Bienvenido, Usuario. (<a href='logout.php'>salir</a>)";
						}
					}

					else{
						echo "Usuario desconocido. <a href='login.php'>Login</a>";
					}
				?>

			</div>

		</div>

	</body>
</html>