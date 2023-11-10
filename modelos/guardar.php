<?php
	require '../conexion.php';

	$cod = $_POST['cod'];
	$descr = $_POST['descr'];
	$cate = $_POST['cate'];
	$precio = $_POST['precio'];
	$cant_a = $_POST['cant_a'];
	$fecha = date('Y-m-d');
	
	// Verificar si el código ya está registrado
	$verifi_code = mysqli_query($mysqli, "SELECT * FROM general WHERE cod='$cod'");
	if(mysqli_num_rows($verifi_code) > 0){
		echo '
		<script>
		alert("Código ya registrado");
		window.location = "inicio.php";
		</script>
		';
		exit();
	}

	// Verificar si la descripción ya está registrada
	$verifi_descr = mysqli_query($mysqli, "SELECT * FROM general WHERE descr='$descr'");
	if(mysqli_num_rows($verifi_descr) > 0){
		echo '
		<script>
		alert("Material ya registrado");
		window.location = "../vista/inicio.php";
		</script>
		';
		exit();
	}

	// Insertar registro en la base de datos
	$sql = "INSERT INTO general (cod, descr, cate, precio, cant_a, fecha) VALUES ('$cod', '$descr', '$cate', '$precio', '$cant_a', '$fecha')";
	$ejecutar = mysqli_query($mysqli, $sql);
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
				<?php if($ejecutar) { ?>
					<h3>REGISTRO GUARDADO</h3>
				<?php } else { ?>
					<h3>ERROR AL GUARDAR</h3>
				<?php } ?>
					
				<a href="../vista/inicio.php" class="btn btn-primary">Regresar</a>
					
			</div>
		</div>
	</div>
</body>
</html>

