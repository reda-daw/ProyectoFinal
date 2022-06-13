<?php
    
    require ('../Conexion/conexion.php');

    $conexion = conexion();

    $id = $_POST["id"];

    $nombreArbitro = $_POST['nombreArbitro'];

    $apellidos = $_POST['apellidos'];

    $categoria = $_POST['categoria'];

    $correo = $_POST['correo'];

    $telefono = $_POST['telefono'];


    try {
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $conexion->prepare("UPDATE arbitros SET nombreArbitro=?, apellidos=?, categoria=?, correo=?, telefono=?  WHERE id = ?");
        
        $sql-> bindParam(1,$nombreArbitro);
        $sql-> bindParam(2,$apellidos);
        $sql-> bindParam(3,$categoria);
        $sql-> bindParam(4,$correo);
        $sql-> bindParam(5,$telefono);
        $sql-> bindParam(6,$id);

        if(!$sql->execute()){
            print "Error al editar";
        }else{
        echo '<script language="javascript">alert("Arbitro Editado");window.location.href="../Administrador/arbitros.php"</script>';
        }
    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    }
    $conexion = null;
?>