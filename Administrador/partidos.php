<!DOCTYPE html>
<html lang="en" dir="ltr">
<title>Administrador | Partidos</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<!-- botones con iconos -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!-- Link para el icono de la barra  -->
<link rel="shortcut icon" href="../Iconos/RFEF.png">
<style>
    body {
        font-family: "Lato", sans-serif;
    }
    
    .sidebar {
        height: 100%;
        width: 160px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: teal;
        overflow-x: hidden;
        padding-top: 16px;
    }
    
    .sidebar a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: #f1f1f1;
        display: block;
    }
    
    .sidebar a:hover {
        color: #000000;
    }
    
    .main {
        margin-left: 160px;
        /* Same as the width of the sidenav */
        padding: 0px 10px;
    }
    
    @media screen and (max-height: 450px) {
        .sidebar {
            padding-top: 15px;
        }
        .sidebar a {
            font-size: 18px;
        }
    }
    
    table {
        border-collapse: collapse;
        width: 100%;
    }
    
    th,
    td {
        text-align: left;
        padding: 8px;
    }
    
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
</head>

<body>

    <div class="sidebar">
        <a href="partidos.php" class="active">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
        <a href="resultados.php">
            <i class="fas fa-calendar"></i>
            <span>Resultados</span>
        </a>
    </div>

    <div class="main">
        <div class="w3-teal">
            <div class="w3-container">
                <h1><b>Partidos</b></h1>
            </div>
        </div>
        <br>
        <div class="w3-container">
            <a href="../insertar/insertarPartido.html"><button class="w3-button w3-circle w3-teal">+</button></a>
            <a href="../Administrador/administrador.php"><button class="w3-btn w3-white w3-border w3-border-teal w3-round-large">Volver</button></a>
        </div>
        <br>
        <div style="overflow-x: auto;">
            <table>
                <tr>
                    <th>Competición</th>
                    <th>Grupo</th>
                    <th>Jornada</th>
                    <th>Equipo Local</th>
                    <th>Equipo Visitante</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Campo</th>
                    <th>Localidad</th>
                    <th>Árbitro</th>
                    <th>Asistente1</th>
                    <th>Asistente2</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php
            require('../Conexion/conexion.php');
            $conexion = conexion();

            try {

                // Establecemos el modo de error de PDO para que salten excepciones

                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "SELECT * FROM partidos";

                $result = $conexion->query($sql);

                foreach ($result as $row) {
                    echo '<tr>';
                    echo '<td>'. $row["competicion"] .'</td>
                    <td>'. $row["grupo"] .'</td>
                    <td>'. $row["jornada"] .'</td>
                    <td>'. $row["equipoLocal"] .'</td>
                    <td>'. $row["equipoVisitante"] .'</td>
                    <td>'. $row['fecha'] .'</td>
                    <td>'. $row['hora'] .'</td>
                    <td>'. $row['campo'] .'</td>
                    <td>'. $row["localidad"] .'</td>
                    <td>'. $row["arbitro"] .'</td> 
                    <td>'. $row["asistenteUno"] .'</td> 
                    <td>'. $row["asistenteDos"] .'</td> 
                   
                    <td><a href="../editar/editarPartido.php?id='. $row["id"] .'"><i class="material-icons w3-xxlarge w3-text-khaki">create</i></td>
                    <td><a href="../eliminar/eliminarPartido.php?id='. $row["id"] .'"><i class="material-icons w3-xxlarge w3-text-red">delete</i></td>
                    <td><a href="../correo/enviarCorreo.php?id='. $row["id"] .'"><i class="material-icons w3-xxlarge w3-text-teal">send</i></td>
                    </tr>'; 
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conexion = null;
            ?>
            </table>
        </div>
        <br>
        <div class="w3-container">
            <a href="../insertar/insertarPartido.html"><button class="w3-button w3-circle w3-teal">+</button></a>
            <a href="../Administrador/administrador.php"><button class="w3-btn w3-white w3-border w3-border-teal w3-round-large">Volver</button></a>
        </div>

    </div>

</body>

</html>