<?php	

	//Se sustituye por una consulta a la base de datos
	if($_GET['user'] === "arturo"){
		echo "Existe";
	}
	else{
		echo "Disponible";
	}

?>