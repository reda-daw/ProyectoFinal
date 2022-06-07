<?php

require ('../Conexion/conexion.php');

$conexion = conexion();

$id = $_GET['id'];


$query = $conexion->prepare("SELECT id,competicion, grupo,jornada,equipolocal,equipovisitante,fecha,hora,campo,localidad,arbitro FROM partidos WHERE id = :id");
$query->execute(['id' => $id]);
$num = $query->rowCount();
if ($num > 0) {
    $row = $query->fetch(PDO::FETCH_ASSOC);
} else {
    header("Location:../Administrador/partidos.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insertar Partido</title>
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
        <h2>Añadir Partido</h2>
        <form action="guardarDatosEditadosPartidos.php" method="post">
        <div class="mb-3 mt-3">
                <input type="hidden" class="form-control" id="id" placeholder="ID" name="id" value="<?php echo $row['id']; ?>">
            </div>
            <div class="mb-3 mt-3">
                <label for="competicion">Competición:</label>
                <input type="text" class="form-control" id="competicion" placeholder="Competicion" name="competicion" value="<?php echo $row['competicion']; ?>">
            </div>
            <div class="mb-3">
                <label for="grupo">Grupo:</label>
                <input type="text" class="form-control" id="grupo" placeholder="Grupo" name="grupo" value="<?php echo $row['grupo']; ?>">
            </div>
            <div class="mb-3">
                <label for="jornada">Jornada:</label>
                <input type="text" class="form-control" id="jornada" placeholder="Jornada" name="jornada" value="<?php echo $row['jornada']; ?>">
            </div>
            <div class="mb-3">
                <label for="equipolocal">Equipo Local:</label>
                <input type="text" class="form-control" id="equipolocal" placeholder="Equipo Local" name="equipolocal" value="<?php echo $row['equipolocal']; ?>">
            </div>
            <div class="mb-3">
                <label for="equipovisitante">Equipo Visitante:</label>
                <input type="text" class="form-control" id="equipovisitante" placeholder="Equipo Visitante" name="equipovisitante" value="<?php echo $row['equipovisitante']; ?>">
            </div>
            <div class="mb-3">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" id="fecha" placeholder="Fecha" name="fecha" value="<?php echo $row['fecha']; ?>">
            </div>
            <div class="mb-3">
                <label for="hora">Hora:</label>
                <input type="time" class="form-control" id="hora" placeholder="Hora" name="hora" value="<?php echo $row['hora']; ?>">
            </div>
            <div class="mb-3">
                <label for="campo">Campo:</label>
                <input type="text" class="form-control" id="campo" placeholder="Campo" name="campo" value="<?php echo $row['campo']; ?>">
            </div>
            <div class="mb-3">
                <label for="localidad">Localidad:</label>
                <input type="text" class="form-control" id="localidad" placeholder="Localidad" name="localidad" value="<?php echo $row['localidad']; ?>">
            </div>
            <div class="mb-3">
                <label for="arbitro">Árbitro:</label>
                <input type="text" class="form-control" id="arbitro" placeholder="Ábitro" name="arbitro" value="<?php echo $row['arbitro']; ?>">
            </div>
            <button type="submit" class="w3-btn w3-white w3-border w3-border-blue w3-round-large">Añadir</button>
            <a href="../Administrador/partidos.php"><button type="button" class="w3-btn w3-white w3-border w3-border-teal w3-round-large">Volver</button></a>
    </div>
    </form>
</body>

</html>