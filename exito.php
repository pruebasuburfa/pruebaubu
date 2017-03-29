<?php if (isset($_REQUEST["nombre"])) {
  $nombre = $_REQUEST["nombre"];
  $fecha = $_REQUEST["fecha"];
} else {
  header("Location: index.php");
}?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Éxito</title>
  </head>
  <body>
    <h2>Gracias por registrarte. Tus datos son los ss, aunque esto no me gusta un pelo:</h2>
    <ul>
      <li>Nombre: <?php echo $nombre ?></li>
      <li>Fecha de nacimiento: <?php echo $fecha ?></li>
    </ul>
  </body>
</html>
