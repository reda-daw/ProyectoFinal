<?php
    
    require ('../Conexion/conexion.php');

    $conexion = conexion();

    $nombre = $_POST['nombre'];

    $usuario = $_POST['usuario'];

    $contraseña = $_POST['contraseña'];

    $perfil = $_POST['perfil'];


    try {
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO usuarios (nombre, usuario, contraseña, perfil) VALUES ('$nombre', '$usuario', '$contraseña' , '$perfil')";
        $result = $conexion->query($sql);
       header("location:../Administrador/administrador.php");
    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    }
    $conexion = null;
?>