<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>¿Viste Star Wars?</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>
  <div class="container">
    <h1>Encuesta</h1>
    <hr>
    <form action="manejar_form.php" method="post">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="ap_pa">Apellido paterno:</label>
        <input type="text" name="ap_pa" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="ap_ma">Apellido materno:</label>
        <input type="text" name="ap_ma" class="form-control">
      </div>
      <div class="form-group">
        <label for="f_nacimiento">Fecha de nacimiento:</label>
        <input type="date" name="f_nacimiento" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="l_nacimiento">Lugar de nacimiento:</label>
        <input type="text" name="l_nacimiento" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="prog_lang">Lenguaje de programación favorito:</label>
        <select class="form-control" name="prog_lang[]" multiple required>
          <?php if (isset($lang_prog)): ?>
            <option value="<?php echo $lang_prog['id'] ?>"><?php echo $lang_prog['nombre'] ?></option>
          <?php else: ?>
            <option value="1">PHP</option>
          <?php endif; ?>
        </select>
      </div>
      <div class="radio">
        ¿Viste Star Wars?<br>
        <label>
          <input type="radio" name="star_wars" value="true" checked>
          Sí
        </label>
        <label>
          <input type="radio" name="star_wars" value="false" >
          No
        </label>
      </div>
      <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Guardar</button>
    </form>

  </div>
</body>
</html>
