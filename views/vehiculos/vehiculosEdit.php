<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title><?php echo $data['titulo'] ?></title>
</head>

<body>
  <h2><?php echo $data['titulo'] ?></h2>
  <br>
  <a href="index.php">Volver</a>
  <br>
  <br>
  <form id="nuevo" name="nuevo" method="POST" autocomplete="off" action="index.php?c=vehiculos&a=guardar">
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="placa" name="placa" placeholder="Placa">
      <label for="placa">Placa</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca">
      <label for="marca">Marca</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo">
      <label for="modelo">Modelo</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="anio" name="anio" placeholder="Año">
      <label for="anio">Año</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="color" name="color" placeholder="Color">
      <label for="color">Color</label>
    </div>
    <button id="guardar" name="guardar" type="submit" class="btn btn-success">Guardar</button>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>