<?php

include 'conexion.php';

$id = $_POST['id'];
$registros = mysqli_query($conexion, "select * from alumno
                      where id='$id'") or
    die("Problemas en el select:" . mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)) {
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br>
        <h1>Formulario Alumnos</h1>
        <br>
        <form class="row g-3" method="POST" action = "actualizarRegistro.php">
            <div class="col-md-0">

                <input type="hidden" class="form-control"  name="id" required value="<?php echo $reg['id']; ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Fecha</label>
                <input type="date" class="form-control" name="fecha" required value="<?php echo $reg['nombre']; ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control"  name="nombre" required value="<?php echo $reg['nombre']; ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Nota 1</label>
                <input type="float" class="form-control" name="nota1" required value="<?php echo $reg['nota1']; ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Nota 2</label>
                <input type="float" class="form-control" name="nota2" required value="<?php echo $reg['nota2']; ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Nota 3</label>
                <input type="float" class="form-control" name="nota3" required value="<?php echo $reg['nota3']; ?>">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="listado.php"><button type="button" class="btn btn-primary">Calcelar</button></a>
            </div>
        </form>
        <?php
    } else
        echo "No existe alumno con dicho codigo";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
      
       