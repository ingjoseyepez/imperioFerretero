<?php
  include("../modelos/consulta.php");	
?>
<html lang="es">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../include/css/styles.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

	<div class="container">
		<h1 class="titulo">EL IMPERIO FERRETERO</h1>
		<div class="banner">
			<div class="accion">
				<a href="nuevo.php" class="btn_defaul">NUEVO</a>
				<a href="reporte.php" class="btn_defaul">REPORTE</a>
				<a href="../index.html" class="btn_defaul">SALIR</a>
			</div>
			
		</div>

		<div>
			<table class="table-warning table-hover" id="mitabla">
				<thead>
					<tr>
						<th>COD</th>
						<th>DESCRIPCION</th>
						<th>CATEGORIA</th>
						<th>PRECIO</th>
						<th>CANTIDAD </th>
						<th>FECHA ING</th>
						<th></th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
					<tr>
						<td>
							<?php echo $row['cod']; ?>
						</td>
						<td>
							<?php echo $row['descr']; ?>
						</td>
						<td>
							<?php echo $row['cate']; ?>
						</td>
						<td>
							<?php echo $row['precio']; ?>
						</td>
						<td>
							<?php echo $row['cant_a']; ?>
						</td>
						<td>
							<?php echo $row['fecha']; ?>
						</td>
						<td><a href="modificar.php?id=<?php echo $row['id']; ?>"><i class="fa-regular fa-pen-to-square"></i></a></td>
						<td><a href="../modelos/eliminar.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-trash-can" style="color: #e82011;"></i></a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<footer>
		<img src="../include/img/footer.jpg" alt="">
		<div class="auto">
		<p class="text">© IMPERIO FERRETERO, Bog</p>
	    </div>
	</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready (function(){
          $('#mitabla').DataTable({


		  });
		});
	</script>
</body>

</html>