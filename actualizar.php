<?php
    $mysqli = include_once("conexion.php");
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $ingredientes = $_POST["ingredientes"];
    $elaboracion = $_POST["elaboracion"];

    $sentencia = $mysqli->prepare("UPDATE recetas SET nombre=?, ingredientes=?, elaboracion=? WHERE id=?");
    $sentencia->bind_param("sssi", $nombre, $ingredientes, $elaboracion, $id);
    $sentencia->execute();
    header("Location: index.php");
?>