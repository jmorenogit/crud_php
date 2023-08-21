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
    
      <div class="row">
        <div class="col-12">
          <h1>Nueva receta</h1>
          <form action="registrar.php" method="POST">
            <div class="form_group">
              <label for="nombre">Nombre</label><br>
              <input placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form_group">
              <label for="ingredientes">Ingredientes</label><br>
              <textarea placeholder="Ingredientes" class="form-control" name="ingredientes" id="ingredientes" rows="2" required></textarea>
            </div>
            <div class="form_group">
              <label for="elaboracion">Elaboración</label><br>
              <textarea placeholder="Elaboración" class="form-control" name="elaboracion" id="elaboracion" rows="10" required></textarea>
            </div>
            <div class="form_group">
              <input type="submit" class="btn btn-primary">
              <input class="btn btn-secondary" type="reset" value="Reset">
              <a class="btn btn-warning" href="index.php">Volver</a>
            </div>
          </form>
        </div>
      </div>

      

    </div>
    
  </body>
</html>