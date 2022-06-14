<?php
    
    require ('../Conexion/conexion.php');

    $conexion = conexion();

    $id = $_POST["id"];

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
        $sql = $conexion->prepare("UPDATE actas SET arbitro=?, dia=?, hora=?, jornada=?, lugar=?, estadio=?, competicion=?, equipolocal=?, equipovisitante=?, marcadorlocal=?, marcadorvisitante=?, localamarillas=?, visitanteamarillas=?, localrojas=?, visitanterojas=? WHERE id = ?");
        
        $sql-> bindParam(1,$arbitro);
        $sql-> bindParam(2,$dia);
        $sql-> bindParam(3,$hora);
        $sql-> bindParam(4,$jornada);
        $sql-> bindParam(5,$lugar);
        $sql-> bindParam(6,$estadio);
        $sql-> bindParam(7,$competicion);
        $sql-> bindParam(8,$equipolocal);
        $sql-> bindParam(9,$equipovisitante);
        $sql-> bindParam(10,$marcadorlocal);
        $sql-> bindParam(11,$marcadorvisitante);
        $sql-> bindParam(12,$localamarillas);
        $sql-> bindParam(13,$visitanteamarillas);
        $sql-> bindParam(14,$localrojas);
        $sql-> bindParam(15,$visitanterojas);
        $sql-> bindParam(16,$id);

        if(!$sql->execute()){
            print "Error al editar";
        }else{
        echo '<script language="javascript">alert("Acta Editado");window.location.href="../actas/listadoActas.php"</script>';
        }
    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    }
    $conexion = null;
?>