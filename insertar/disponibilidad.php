<?php
    
    require ('../Conexion/conexion.php');

    $conexion = conexion();

    $nombre = $_POST['nombre'];

    $apellidos = $_POST['apellidos'];

    $disponibilidad = $_POST['disponibilidad'];


    try {
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO disponibilidad (nombre, apellidos, disponibilidad) VALUES ('$nombre', '$apellidos', '$disponibilidad')";
        $result = $conexion->query($sql);
       header("location:../Cliente/Arbitro.php");
    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    }
    $conexion = null;
?>