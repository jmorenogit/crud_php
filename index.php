<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD PHP MySQLi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    

    <div class="container text-center">

      <br>
    
      <div class="row">
        <div class="col">
          <h1>CRUD PHP MySQLi</h1>
        </div>
        <div class="col">
          <a href="https://github.com/jmorenogit/crud_php.git" class="btn btn-primary">Ir a GitHub</a>
        </div>
      </div>

      <br><br>
      
      <div class="row">
        <div class="col">
          <h4>Recetas de Cocina</h4>
        </div>
        <div class="col">
          <form action="nueva_receta.php" method="POST">
            <input type="submit" class="btn btn-success" value="Nueva receta">
          </form>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ingredientes</th>
                <th>Elaboración</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
            </thead>
            <tbody>
            <?php 
                $mysqli = include_once "conexion.php";
                $resultado = $mysqli->query("SELECT id, nombre, ingredientes, elaboracion FROM recetas");
                $recetas = $resultado->fetch_all(MYSQLI_ASSOC);
                foreach ($recetas as $receta){
            ?>
                  <tr>
                    <td><?php echo $receta["id"] ?></td>
                    <td><?php echo $receta["nombre"] ?></td>
                    <td><?php echo $receta["ingredientes"] ?></td>
                    <td><?php echo $receta["elaboracion"] ?></td>
                    <td><a class="btn btn-secondary" href="editar.php?id=<?php echo $receta['id'] ?>">Editar</a></td>
                    <td><a class="btn btn-danger" href="eliminar.php?id=<?php echo $receta['id'] ?>">Eliminar</a></td>
                  </tr>

            <?php }
                $mysqli->close();
            ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>
    
  </body>
</html>