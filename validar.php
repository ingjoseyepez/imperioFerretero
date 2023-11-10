<?php

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$conexion=mysqli_connect("localhost","root","root","ferreterias");
$consulta ="SELECT * FROM usuario WHERE usuario='$usuario' and clave='$clave'";
$resultado = mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){
    header("location:vista/inicio.php");
}
else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>

