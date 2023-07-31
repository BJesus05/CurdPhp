<?php

include('conexion.php');

$fecha = $_POST['fecha'];
$nombre = $_POST['nombre'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];


$promedio = ($nota1 + $nota2 + $nota3) / 3;
$pDecimales = number_format($promedio, 1);


if ($pDecimales >= 3.5) {
  $estado = "Aprobado";
} else {
  $estado = "No aprobado";
}

mysqli_query($conexion, "insert into alumno(fecha,nombre,nota1,nota2,nota3,promedio,estado) values
 ('$fecha','$nombre','$nota1','$nota2','$nota3','$pDecimales','$estado')")
  or die("Problemas en el select" . mysqli_error($conexion));

?>

<script>
  window.location.href = 'listado.php';
</script>