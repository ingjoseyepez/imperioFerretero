<?php
    require '../conexion.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        // Manejar el caso en que no se proporciona un ID válido
        echo "ID no válido";
        exit();
    }

    // Verificar si se ha enviado el formulario de confirmación
    if (isset($_POST['confirm'])) {
        // Procesar la eliminación si se confirma
        $sql = "DELETE FROM general WHERE id = '$id'";
        $resultado = $mysqli->query($sql);

        // Redirigir después de la eliminación
        header("Location: ../vista/inicio.php");
        exit();
    }
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
                <h3>¿Estás seguro de que deseas eliminar este registro?</h3>
                <form method="post">
                    <button type="submit" name="confirm" class="btn btn-danger">Sí, eliminar</button>
                    <a href="../vista/inicio.php" class="btn btn-primary">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

