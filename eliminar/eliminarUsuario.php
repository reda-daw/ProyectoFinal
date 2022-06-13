<?php
    
    require ('../Conexion/conexion.php');

    $conexion = conexion();

    $id = $_GET["id"];


    try {
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $conexion->prepare("DELETE FROM usuarios WHERE id = ?");
        $sql-> bindParam(1,$id);
        if(!$sql->execute()){
            print "Error al eliminar";
        }else{
        echo '<script language="javascript">alert("Usuario Borrado");window.location.href="../Administrador/usuario.php"</script>';
        }
    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    }
    $conexion = null;
?>
