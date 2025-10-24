<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Datos Recibidos</title>
</head>
<body>
<?php
echo "<h2>Datos recibidos del formulario:</h2>";

if (isset($_POST['nombre'])) {
  $nombre = $_POST['nombre'];
  echo "Nombre del Cliente: " . $nombre . "<br>";
}

if (isset($_POST['correo'])) {
  $correo = $_POST['correo'];
  echo "Correo electronico: " . $correo . "<br>";
}

if (isset($_POST['telefono'])) {
  $telefono = $_POST['telefono'];
  echo "Numero de Telefono: " . $telefono . "<br>";
}

if (isset($_POST['asunto'])) {
  $asunto = $_POST['asunto'];
  echo "Asunto del Mensaje: " . $asunto . "<br>";
}

if (isset($_POST['mensaje'])) {
  $mensaje = $_POST['mensaje'];
  echo "Mensaje del cliente: " . $mensaje . "<br>";
}

