<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>
  <body>
    <?php include_once("cabecera.php") ?>
    <form class="form" action="exito.php" method="post">
      <fieldset>
        <legend>Formulario de prueba</legend>
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" maxlength="50" required>
        <label for="fecha">Fecha de nacimiento: </label>
        <input type="date" name="fecha" id="fecha" required>
        <input type="text" name="pruebita" value="nada" placeholder="nada">
        <input type="submit"  value="Enviar">
      </fieldset>
    </form>
  </body>
</html>
