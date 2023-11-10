<?php
	
	require '../conexion.php';
    $id = $_POST['id'];
	$cod = $_POST['cod'];
	$descr = $_POST['descr'];
	$cate = $_POST['cate'];
	$precio = $_POST['precio'];
	$cant_a = $_POST['cant_a'];
	$fecha = date('Y-m-d');
	
	
	$sql = "UPDATE general SET cod='$cod', descr='$descr', cate='$cate', precio='$precio', cant_a='$cant_a', fecha='$fecha' WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>REGISTRO MODIFICADO</h3>
				<?php } else { ?>
				<h3>ERROR AL MODIFICAR</h3>
				<?php } ?>
				
				<a href="../vista/inicio.php" class="btn btn-primary">Regresar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>
