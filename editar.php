<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nueva receta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
<body>   

    <div class="container text-center">

      <br>

<?php
    $mysqli = include_once("conexion.php");
    $id = $_GET["id"];
    $sentencia = $mysqli->prepare("SELECT id, nombre, ingredientes, elaboracion FROM recetas WHERE id = ?");
    $sentencia->bind_param("i", $id);
    $sentencia->execute();
    $resultado = $sentencia->get_result();
    $receta = $resultado->fetch_assoc();
    if (!$receta) {
        exit("No hay resultados para ese ID");
    }
?>

<div class="row">
    <div class="col-12">
        <h1>Actualizar receta</h1>
        <form action="actualizar.php" method="POST">
            <!--Botón oculto con el id de la receta-->
            <input type="hidden" name="id" value="<?php echo $receta['id'] ?>">
            <div class="form_group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $receta['nombre'] ?>" placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="ingredientes">Ingredientes</label>
                <textarea placeholder="Ingredientes" class="form-control" name="ingredientes" id="ingredientes" rows="3" required><?php echo $receta["ingredientes"] ?></textarea>
            </div>
            <div class="form-group">
                <label for="elaboracion">Elaboracion</label>
                <textarea placeholder="Elaboracion" class="form-control" name="elaboracion" id="elaboracion" rows="10" required><?php echo $receta["elaboracion"] ?></textarea>
            </div>
            <div class="form_group">
              <input type="submit" class="btn btn-primary">
              <a class="btn btn-warning" href="index.php">Volver</a>
            </div>
    </div>    
</div>

</div>
</body>
</html>