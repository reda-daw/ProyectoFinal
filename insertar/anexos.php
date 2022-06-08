<?php
    
    require ('../Conexion/conexion.php');

    $conexion = conexion();

    $arbitro = $_POST['arbitro'];

    $equipolocal = $_POST['equipolocal'];

    $equipovisitante = $_POST['equipovisitante'];

    $descripcion = $_POST['descripcion'];

    try {
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO anexos (arbitro,equipolocal,equipovisitante,descripcion) VALUES ('$arbitro','$equipolocal','$equipovisitante','$descripcion')";
        $result = $conexion->query($sql);
       echo '<script language="javascript">alert("Anexo enviado");window.location.href="../Cliente/Arbitro.php"</script>';
    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    }
    $conexion = null;
?>