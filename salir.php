<?php 

	session_start();

	unset($_SESSION['nombre']);
	unset($_SESSION['apellido']);

	
	session_destroy();
	
	header("Refresh:0; url=index.php");

 ?>