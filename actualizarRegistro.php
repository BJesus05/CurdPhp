<?php
  include 'conexion.php';
  $id = $_POST['id'];
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
  
    mysqli_query($conexion, "UPDATE `alumno` SET fecha='$fecha',nombre='$nombre',
    nota1='$nota1',nota2='$nota2',nota3='$nota3',promedio='$pDecimales',estado='$estado'
    WHERE id='$id'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "El Registro fue modificado con exito";

?>

<script>
  window.location.href = 'listado.php';
</script>