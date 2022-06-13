<?php
    
    require ('../Conexion/conexion.php');

    $conexion = conexion();

    $competicion = $_POST['competicion'];

    $grupo = $_POST['grupo'];

    $jornada = $_POST['jornada'];

    $equipolocal = $_POST['equipolocal'];

    $equipovisitante = $_POST['equipovisitante'];

    $fecha = $_POST['fecha'];

    $hora = $_POST['hora'];

    $campo = $_POST['campo'];

    $localidad = $_POST['localidad'];

    $arbitro = $_POST['arbitro'];

    $asistenteuno = $_POST['asistenteuno'];

    $asistentedos = $_POST['asistentedos'];

    try {
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO partidos (competicion, grupo,jornada, equipolocal,equipovisitante,fecha,hora,campo,localidad,arbitro,asistenteuno,asistentedos) VALUES ('$competicion', '$grupo','$jornada','$equipolocal','$equipovisitante','$fecha','$hora','$campo','$localidad','$arbitro','$asistenteuno','$asistentedos')";
        $result = $conexion->query($sql);
       //header("location:../Administrador/partidos.html");
       echo '<script language="javascript">alert("Insertado Correctamente");window.location.href="../Administrador/partidos.php"</script>';
    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    }
    $conexion = null;
?>