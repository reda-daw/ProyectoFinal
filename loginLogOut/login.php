<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

include_once "../Conexion/conexion.php";

$conexion = conexion();
$clave = "";
$clave = $_POST['contraseña'];
$usuario = "";
$usuario = $_POST['usuario'];


 
try {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM usuarios";
    $result = $conexion->query($sql);
    session_start();

    foreach ($result as $row) {
        if ($row['contraseña'] == $clave && $row['usuario'] == $usuario) {
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['perfil'] = $row['perfil'];

            if (substr($clave, 0 ,2) == 'AD') {
                echo $_SESSION['nombre'];
                echo $_SESSION['perfil'];
                header("location:../Administrador/administrador.php");
                //$coleccion->insertOne(['nombre' => "hoal", 'perfil' => "ADM"]);
            } else if (substr($clave, 0 ,2) == 'AR') {
                echo $_SESSION['nombre'];
                echo $_SESSION['perfil'];
                header("location:../Cliente/Arbitro.php");
                // $coleccion->insertOne( [ 'nombre' => $row['nombre'], 'perfil' => "USR"] );

            }
        }
    }
} catch (PDOException $e) {

    echo "Error: " . $e->getMessage();
}
$conexion = null;
