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
  <a href="index.php?c=vehiculos&a=nuevo">Agregar</a>
  <br>
  <br>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Placa</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Año</th>
        <th scope="col">Color</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data["vehiculos"] as $row) {
        echo "<tr>";
        echo "<td>" . $row['placa'] . "</td>";
        echo "<td>" . $row['marca'] . "</td>";
        echo "<td>" . $row['modelo'] . "</td>";
        echo "<td>" . $row['anio'] . "</td>";
        echo "<td>" . $row['color'] . "</td>";
        echo "<td><a href='index.php?c=vehiculos&a=modificar&id=" . $row['id'] . "'>Editar</a></td>";
        echo "<td><a href='index.php?c=vehiculos&a=eliminar&id=" . $row['id'] . "'>Eliminar</a></td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>