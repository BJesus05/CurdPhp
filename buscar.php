  <?php
  include 'conexion.php';




  $registros = mysqli_query($conexion, "SELECT id,fecha,nombre,nota1,nota2,nota3,promedio,estado
  from alumno where id='$_REQUEST[id]'") or
    die("Problemas en el select:" . mysqli_error($conexion));



  ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br>
        <h1>Listado Alumnos</h1>
        <br>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">fecha</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">nota 1</th>
                    <th scope="col">nota 2</th>
                    <th scope="col">nota 3</th>
                    <th scope="col">Promedio</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 if ($reg = mysqli_fetch_array($registros)) {
                    echo "<tr>";
                    echo "<td>" . $reg['id'] . "</td>";
                    echo "<td>" . $reg['fecha'] . "</td>";
                    echo "<td>" . $reg['nombre'] . "</td>";
                    echo "<td>" . $reg['nota1'] . "</td>";
                    echo "<td>" . $reg['nota2'] . "</td>";
                    echo "<td>" . $reg['nota3'] . "</td>";
                    echo "<td>" . $reg['promedio'] . "</td>";
                    echo "<td>" . $reg['estado'] . "</td>";
                
                    echo "</tr>";
                }

           
            else {
              echo "<tr><td colspan='5'>No existe un alumno con ese ID.</td></tr>";
            }
  
      
          ?>
            </tbody>
        </table>
        <a href="listado.php"><button type="button" class="btn btn-primary">Listado</button></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>