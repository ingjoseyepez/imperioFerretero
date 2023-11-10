<?php
	require '../conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM general WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../include/css/style_form.css" rel="stylesheet">
</head>

<body>
	<div class="container">
	<div class="titulo">
				<h3>MODIFICAR REGISTRO</h3>
			</div>

		<form class="formulario" method="POST" action="../modelos/update.php" autocomplete="off">
			<div class="cl">
				<label for="cod" class="col-sm-2 control-label">CODIGO</label>

				<input type="text" class="form-control" id="cod" name="cod" placeholder="CODIGO"
					value="<?php echo $row['cod']; ?>" required>

			</div>

			<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />

			<div class="cl">
				<label for="descr" class="col-sm-2 control-label">DESCRIPCION</label>

				<input type="tel" class="form-control" id="descr" name="descr" placeholder="DESCRIPCION"
					value="<?php echo $row['descr']; ?>">

			</div>
			<div class="cl">
				<label for="cate" class="col-sm-2 control-label">CATEGORIA</label>

				<input type="cate" class="form-control" id="cate" name="cate" placeholder="CATEGORIA"
					value="<?php echo $row['cate']; ?>">

			</div>
			<div class="cl">
				<label for="precio" class="col-sm-2 control-label">PRECIO</label>

				<input type="precio" class="form-control" id="precio" name="precio" placeholder="PRECIO"
					value="<?php echo $row['precio']; ?>">

			</div>
			<div class="cl">
				<label for="cant_a" class="col-sm-2 control-label">CANTIDAD </label>

				<input type="cant_a" class="form-control" id="cant_a" name="cant_a" placeholder="CANTIDAD "
					value="<?php echo $row['cant_a']; ?>">

			</div>
			<div class="cl">
				<label for="fecha" class="col-sm-2 control-label">FECHA ING</label>

				<input type="date" class="form-control" id="fecha" name="fecha" placeholder="FECHA INGRESO"
					value="<?php echo $row['fecha']; ?>">

			</div>

			<div class="cl_btn">
				<div class="col-sm-offset-2 col-sm-10">
				<a href="inicio.php" class="btn_defaul">Regresar</a>
						<button type="submit" class="btn">Guardar</button>
				</div>
			</div>
		</form>
	</div>
</body>

</html>