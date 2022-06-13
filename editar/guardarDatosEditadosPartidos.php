<?php
    
    require ('../Conexion/conexion.php');

    $conexion = conexion();

    $id = $_POST["id"];

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
        $sql = $conexion->prepare("UPDATE partidos SET competicion=?, grupo=?, jornada=?, equipolocal=?, equipovisitante=?, fecha=?, hora=?, campo=?, localidad=?, arbitro=?, asistenteuno=?, asistentedos=?  WHERE id = ?");
        
        $sql-> bindParam(1,$competicion);
        $sql-> bindParam(2,$grupo);
        $sql-> bindParam(3,$jornada);
        $sql-> bindParam(4,$equipolocal);
        $sql-> bindParam(5,$equipovisitante);
        $sql-> bindParam(6,$fecha);
        $sql-> bindParam(7,$hora);
        $sql-> bindParam(8,$campo);
        $sql-> bindParam(9,$localidad);
        $sql-> bindParam(10,$arbitro);
        $sql-> bindParam(11,$asistenteuno);
        $sql-> bindParam(12,$asistentedos);
        $sql-> bindParam(13,$id);

        if(!$sql->execute()){
            print "Error al editar";
        }else{
        echo '<script language="javascript">alert("Partido Editado");window.location.href="../Administrador/partidos.php"</script>';
        }
    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    }
    $conexion = null;
?>