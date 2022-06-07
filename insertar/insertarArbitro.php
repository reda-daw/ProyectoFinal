<?php
    
    require ('../Conexion/conexion.php');

    $conexion = conexion();

    $nombreArbitro = $_POST['nombreArbitro'];

    $apellidos = $_POST['apellidos'];

    $categoria = $_POST['categoria'];

    $correo = $_POST['correo'];

    $telefono = $_POST['telefono'];

    try {
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO arbitros (nombreArbitro, apellidos, categoria, correo, telefono) VALUES ('$nombreArbitro', '$apellidos', '$categoria' , '$correo','$telefono')";
        $result = $conexion->query($sql);
       //header("location:../Administrador/arbitros.html");
        echo '<script language="javascript">alert("Insertado Correctamente");window.location.href="../Administrador/arbitros.php"</script>';
    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    }
    $conexion = null;
?>
