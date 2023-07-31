<?php 

include 'conexion.php';




$registros = mysqli_query($conexion, "SELECT id FROM alumno WHERE id='$_REQUEST[id]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)) {
    mysqli_query($conexion, "DELETE FROM alumno WHERE id='$_REQUEST[id]'") or
        die("Problemas en el delete:" . mysqli_error($conexion));
    echo "Se efectuó el borrado del alumno con dicho Id.";
} else {
    echo "No existe un alumno con ese ID.";
}


?>

<script>
  window.location.href = 'listado.php';
</script>