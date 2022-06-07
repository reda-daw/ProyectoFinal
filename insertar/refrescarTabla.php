<?php
    
    require ('../Conexion/conexion.php');

    $conexion = conexion();

    try {
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $conexion->prepare("DELETE  FROM disponibilidad ");
        $sql-> bindParam(1,$id);
        if(!$sql->execute()){
            print "Error al eliminar";
        }else{
        echo '<script language="javascript">alert("Actualizado");window.location.href="../Administrador/administrador.php"</script>';
        }
    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    }
    $conexion = null;
?>