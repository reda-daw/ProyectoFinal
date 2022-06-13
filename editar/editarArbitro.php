<?php

require ('../Conexion/conexion.php');

$conexion = conexion();

$id = $_GET['id'];


$query = $conexion->prepare("SELECT id,nombreArbitro,apellidos,categoria,correo,telefono FROM arbitros WHERE id = :id");
$query->execute(['id' => $id]);
$num = $query->rowCount();
if ($num > 0) {
    $row = $query->fetch(PDO::FETCH_ASSOC);
} else {
    header("Location:../Administrador/arbitros.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Editar Árbitro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Link para el icono de la barra  -->
    <link rel="shortcut icon" href="../Iconos/RFEF.png">
</head>

<body style="background-color: rgb(200, 241, 221)">
    <div class="container mt-3">
        <h2>Editar Árbitro</h2>
        <form action="guardarDatosEditadosArbitro.php" method="post">
		<div class="mb-3 mt-3">
                <input type="hidden" class="form-control" id="id" placeholder="ID" name="id" value="<?php echo $row['id']; ?>">
            </div>
            <div class="mb-3 mt-3">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombreArbitro" placeholder="Nombre" name="nombreArbitro" value="<?php echo $row['nombreArbitro']; ?>">
            </div>
            <div class="mb-3 mt-3">
                <label for="apellidos">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" name="apellidos" value="<?php echo $row['apellidos']; ?>">
            </div>
            <div class="mb-3 mt-3">
                <label for="categoria">Categoria:</label>
                <input type="text" class="form-control" id="categoria" placeholder="Categoria" name="categoria" value="<?php echo $row['categoria']; ?>">
            </div>
            <div class="mb-3">
                <label for="correo">Correo:</label>
                <input type="email" class="form-control" id="correo" placeholder="Correo" name="correo" value="<?php echo $row['correo']; ?>">
            </div>
            <div class="mb-3">
                <label for="telefono">Telefono:</label>
                <input type="tel" class="form-control" id="telefono" placeholder="Teléfono" name="telefono" value="<?php echo $row['telefono']; ?>">
            </div>
            <button type="submit" class="w3-btn w3-white w3-border w3-border-blue w3-round-large">Añadir</button>
            <a href="../Administrador/arbitros.php"><button type="button" class="w3-btn w3-white w3-border w3-border-teal w3-round-large">Volver</button></a>
    </div>
    </form>

</body>

</html>