<?php
	
	$mysqli = new mysqli('localhost', 'root', 'root', 'ferreterias');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>