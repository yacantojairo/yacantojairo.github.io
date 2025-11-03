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

if (isset($_POST['telefono'])) {
  $telefono = $_POST['telefono'];
  echo "Numero de telefono: " . $telefono . "<br>";
}

if (isset($_POST['producto'])) {
  $producto = $_POST['producto'];
  echo "Producto elegido: " . $producto . "<br>";
}

if (isset($_POST['pago'])) {
  $pago = $_POST['pago'];
  echo "Medio de pago: " . $pago . "<br>";
}

if (isset($_POST['cantidad'])) {
  $cantidad = $_POST['cantidad'];
  echo "Cantidad elegida: " . $cantidad . "<br>";
}

if (isset($_POST['direccion'])) {
  $direccion = $_POST['direccion'];
  echo "Direccion: " . $direccion . "<br>";
}

