<?php
if (!isset($_GET["id"])) {
    exit("No hay id");
}
$mysqli = include_once "conexion.php";
$id = $_GET["id"];
$sentencia = $mysqli->prepare("DELETE FROM recetas WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
header("Location: index.php");