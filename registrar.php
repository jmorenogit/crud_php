<?php

//conexión a BBDD
$mysqli = include_once "conexion.php";

//Recepción valores formulario
$nombre = $_POST["nombre"];
$ingredientes = $_POST["ingredientes"];
$elaboracion = $_POST["elaboracion"];

//Inserción en BBDD
$sentencia = $mysqli->prepare("INSERT INTO recetas (nombre,ingredientes,elaboracion) VALUES (?,?,?)");
$sentencia->bind_param("sss", $nombre, $ingredientes, $elaboracion);
$sentencia->execute();

$mysqli->close();

header("Location: index.php");