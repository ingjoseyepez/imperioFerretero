<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../include/css/style_form.css" rel="stylesheet">
		
	</head>
	
	<body>
		<div class="container">
			<div class="titulo">
				<h3>NUEVO REGISTRO</h3>
			</div>
			
			<form class="formulario" method="POST" action="../modelos/guardar.php" autocomplete="off">
				<div class="cl">
					<label for="COD" class="">CODIGO:</label>
			      <input type="text" class="" id="cod" name="cod" placeholder="CODIGO" required>
				</div>
				<div class="cl">
					<label for="descr" class="">DESCRIPCION:</label>
				<input type="text" class="" id="descr" name="descr" placeholder="DESCRIPCION" required>
				</div>
				<div class="cl">
					<label for="cate" class="">CATEGORIA:</label>
				<input type="text" class="" id="cate" name="cate" placeholder="CATEGORIA" required>
				</div>
				<div class="cl">
					<label for="precio" class="">PRECIO:</label>
				<input type="text" class="" id="precio" name="precio" placeholder="PRECIO" required>
				</div>
				<div class="cl">
					<label for="cant_a" class="">CANTIDAD: </label>
					<input type="text" class="" id="cant_a" name="cant_a" placeholder="CANTIDAD" required>
				</div>
				<div class="cl">
					<label for="fecha" class="">FECHA ING:</label>
						<input type="date" class="" id="fecha" name="fecha" placeholder="FECHA INGRESO" required>
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