<?php
include_once ('get_personas.php');
$resultados = get_personas();
if (!isset($resultados['errors'])) {
  $personas = $resultados;
} else {
  foreach ($resultados['errors'] as $e) {
    echo $e;
  }
  exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <title>Personas</title>
</head>
<body>
  <div class="container">
    <h2>Resultados de la encuesta:</h2>
    <hr>

    <table class="table table-hover">
      <thead>

        <tr>
          <th>
            Nombre
          </th>
          <th>
            Apellidos
          </th>
          <th>
            Fecha de nacimiento
          </th>
          <th>
            Lugar de nacimiento
          </th>
          <th>
            Vio película
          </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($personas as $persona ): ?>
          <tr>
            <td>
              <?php echo $persona['nombre'] ?>
            </td>
            <td>
              <?php echo $persona['apellido_paterno'].' '.$persona['apellido_materno'] ?>
            </td>
            <td>
              <?php echo $persona['fecha_nacimiento'] ?>
            </td>
            <td>
              <?php echo $persona['l_nacimiento'] ?>
            </td>
            <td>
              <?php if ($persona['vio_pelicula']): ?>
                <span class="glyphicon glyphicon-ok"></span>
              <?php else: ?>
                <span class="glyphicon glyphicon-remove"></span>
              <?php endif; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </div>

  </table>

</body>
</html>
