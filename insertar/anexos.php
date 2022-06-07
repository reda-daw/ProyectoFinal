<?php
    
    require ('../Conexion/conexion.php');

    $conexion = conexion();

    $arbitro = $_POST['arbitro'];

    $descripcion = $_POST['descripcion'];

    try {
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO anexos (arbitro,descripcion) VALUES ('$arbitro','$descripcion')";
        $result = $conexion->query($sql);
       echo '<script language="javascript">alert("Insertado Correctamente");window.location.href="../Cliente/Arbitro.php"</script>';
    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    }
    $conexion = null;
?>