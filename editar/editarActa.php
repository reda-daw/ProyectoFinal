<?php

require ('../Conexion/conexion.php');

$conexion = conexion();

$id = $_GET['id'];


$query = $conexion->prepare("SELECT id,arbitro,dia,hora,jornada,lugar,estadio,competicion,equipolocal,equipovisitante,marcadorlocal,marcadorvisitante,localamarillas,visitanteamarillas,localrojas,visitanterojas FROM actas WHERE id = :id");
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Link para el icono de la barra  -->
    <link rel="shortcut icon" href="../Iconos/RFEF.png">
    <!-- Link para los icones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Link para los escudos -->
    <link rel="stylesheet" href="https://refereedata.es/vi/assets/css/flag-icon/css/flag-icon.min.css" type="text/css" />
    <!-- Link Estilo -->
    <link rel="stylesheet" href="../Estilos/Style.css">
    <title>Actas</title>
</head>

<body>
    <div class="container mt-3">
        <h2>Acta del Partido</h2>
        <form action="guardarDatosEditadosActa.php" method="post">
        <div class="mb-3 mt-3">
                <input type="hidden" class="form-control" id="id" placeholder="ID" name="id" value="<?php echo $row['id']; ?>">
            </div>
            <div class="mb-3">
                <i class="material-icons prefix bluemiddle-ref-color">people</i>
                <input type="text" class="form-control" id="arbitro" placeholder="Árbitro" name="arbitro" value="<?php echo $row['arbitro']; ?>">
            </div>
            <div class="mb-3">
                <i class="material-icons prefix bluemiddle-ref-color">event</i>
                <input type="date" class="form-control" id="dia" placeholder="dia" name="dia" value="<?php echo $row['dia']; ?>">
            </div>
            <div class="mb-3">
                <i class="material-icons prefix bluemiddle-ref-color">schedule</i>
                <input type="time" class="form-control" id="hora" placeholder="Hora" name="hora" value="<?php echo $row['hora']; ?>">
            </div>
            <div class="mb-3">
                <i class="material-icons prefix bluemiddle-ref-color">pin</i>
                <input type="text" class="form-control" id="jornada" placeholder="Jornada" name="jornada" value="<?php echo $row['jornada']; ?>">
            </div>
            <div class="mb-3">
                <span><b>Lugar del partido</b></span>
            </div>
            <div class="mb-3">
                <i class="material-icons prefix bluemiddle-ref-color">place</i>
                <input placeholder="Lugar" id="lugar" name="lugar" type="text" class="form-control" value="<?php echo $row['lugar']; ?>">
            </div>
            <div class="mb-3">
                <i class="material-icons prefix greenrussian-ref-color">grass</i>
                <input placeholder="Estadio" id="estadio" name="estadio" type="text" class="form-control" value="<?php echo $row['estadio']; ?>">
            </div>
            <div class="mb-3">
                <span><b>Datos del partido</b></span>
            </div>
            <div class="mb-3">
                <i class="material-icons prefix greydim-ref-color">emoji_events</i>
                <input placeholder="Competicion" id="competicion" name="competicion" type="text" class="form-control" value="<?php echo $row['competicion']; ?>">
            </div>
            <div class="mb-3">
                <i class="material-icons prefix bluemiddle-ref-color">shield</i>
                <input placeholder="Equipo Local" id="equipolocal" name="equipolocal" type="text" class="form-control" value="<?php echo $row['equipolocal']; ?>">
            </div>
            <div class="mb-3">
                <i class="material-icons prefix melon-ref-color">shield</i>
                <input placeholder="Equipo Visitante" id="equipovisitante" name="equipovisitante" type="text" class="form-control" value="<?php echo $row['equipovisitante']; ?>">
            </div>

            <div class="mb-3">
                <span><b>Marcador</b></span>
            </div>
            <div class="mb-3">
                <i class="material-icons prefix bluemiddle-ref-color">shield</i>
                <input placeholder="Marcador local" class="form-control" type="number" name="marcadorlocal" id="marcadorlocal" min="0" step="1" value="<?php echo $row['marcadorlocal']; ?>"/>
            </div>
            <div class="mb-3">
                <i class="material-icons prefix melon-ref-color">shield</i>
                <input placeholder="Marcador Visitante" class="form-control" type="number" name="marcadorvisitante" id="marcadorvisitante" min="0" step="1" value="<?php echo $row['marcadorvisitante']; ?>"/>
            </div>

            <div class="mb-3 ">
                <span><b>Amarillas</b></span>
            </div>
            <div class="mb-3 ">
                <i class="material-icons prefix yellowcard-ref-color ">square</i>
                <input placeholder="Amarillas local" class="form-control" type="number" name="localamarillas" id="localamarillas" min="0 " step="1" value="<?php echo $row['localamarillas']; ?>"/>
            </div>
            <div class="mb-3 ">
                <i class="material-icons prefix yellowcard-ref-color ">square</i>
                <input placeholder="Amarillas Visitante" class="form-control" type="number" name="visitanteamarillas" id="visitanteamarillas" min="0" step="1" value="<?php echo $row['visitanteamarillas']; ?>"/>
            </div>
            <div class="mb-3 ">
                <span><b>Rojas</b></span>
            </div>
            <div class="mb-3 ">
                <i class="material-icons prefix red-ref-color">square</i>
                <input placeholder="Rojas Local" class="form-control" type="number" name="localrojas" id="localrojas" min="0" step="1" value="<?php echo $row['localrojas']; ?>"/>
            </div>
            <div class="mb-3 ">
                <i class="material-icons prefix red-ref-color ">square</i>
                <input placeholder="Rojas Visitante" class="form-control" type="number" name="visitanterojas" id="visitanterojas" min="0" step="1" value="<?php echo $row['visitanterojas']; ?>"/>
            </div>
            <br>
            <button type="submit" class="w3-btn w3-white w3-border w3-border-blue w3-round-large">Grabar Datos</button>
            <a href="../Administrador/ListadoActas.php"><button type="button" class="w3-btn w3-white w3-border w3-border-teal w3-round-large">Volver</button></a>
        </form>
    </div>
</body>

</html>