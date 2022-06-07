<?php
    
    require ('../Conexion/conexion.php');

    $conexion = conexion();

    $arbitro = $_POST['arbitro'];

    $dia = $_POST['dia'];

    $hora = $_POST['hora'];

    $jornada = $_POST['jornada'];

    $lugar = $_POST['lugar'];

    $estadio = $_POST['estadio'];

    $competicion = $_POST['competicion'];

    $equipolocal = $_POST['equipolocal'];

    $equipovisitante = $_POST['equipovisitante'];

    $marcadorlocal = $_POST['marcadorlocal'];

    $marcadorvisitante = $_POST['marcadorvisitante'];

    $localamarillas = $_POST['localamarillas'];

    $visitanteamarillas = $_POST['visitanteamarillas'];

    $localrojas = $_POST['localrojas'];

    $visitanterojas = $_POST['visitanterojas'];

    

    try {
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO actas (arbitro,dia,hora,jornada,lugar,estadio,competicion,equipolocal,equipovisitante,marcadorlocal,marcadorvisitante,localamarillas,visitanteamarillas,localrojas,visitanterojas) VALUES ('$arbitro', '$dia', '$hora','$jornada','$lugar','$estadio','$competicion','$equipolocal','$equipovisitante','$marcadorlocal','$marcadorvisitante','$localamarillas','$visitanteamarillas','$localrojas','$visitanterojas')";
        $result = $conexion->query($sql);
       //header("location:../Administrador/arbitros.html");
       echo '<script language="javascript">alert("Acta Cerrado");window.location.href="../Cliente/Arbitro.php"</script>';
    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    }
    $conexion = null;
?>