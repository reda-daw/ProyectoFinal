<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Resultados</title>
    <!-- Link para el icono de la barra  -->
    <link rel="shortcut icon" href="../Iconos/RFEF.png">
    <!--Estilos -->
    <link rel="stylesheet" href="../Estilos/EstiloAd.css">
</head>

<body style="background-color: rgb(200, 241, 221);">
    <div style="overflow-x: auto;">
        <table>
            <tr>
                <th><b>Árbitro</b></th>
                <th><b>Equipo Local</b></th>
                <th><b>Equipo Visitante</b></th>
                <th><b>Marcador Local</b></th>
                <th><b>Marcador Visitante</b></th>

            </tr>
            <?php
            require('../Conexion/conexion.php');
            $conexion = conexion();

            try {

                // Establecemos el modo de error de PDO para que salten excepciones

                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "SELECT arbitro,equipoLocal,equipoVisitante,marcadorLocal,marcadorVisitante FROM actas";

                $result = $conexion->query($sql);

                foreach ($result as $row) {
                    echo '<tr>';
                    echo '<td>'. $row["arbitro"] .'</td>
                    <td>'. $row["equipoLocal"] .'</td>
                    <td>'. $row["equipoVisitante"] .'</td>
                    <td>'. $row["marcadorLocal"] .'</td> 
                    <td>'. $row["marcadorVisitante"] .'</td> 
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
        <a href="partidos.php"><button class="w3-btn w3-white w3-border w3-border-teal w3-round-large">Volver</button></a>
    </div>
</body>

</html>