<!DOCTYPE html>
<html lang="en" dir="ltr">
<title>Administrador | Árbitro</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<!-- Link para el icono de la barra  -->
<link rel="shortcut icon" href="../Iconos/RFEF.png">
<!-- botones con iconos -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!-- Link Estilo -->
<link rel="stylesheet" href="../Estilos/EstiloAd.css">

</head>

<body>

    <div class="sidebar">
        <a href="arbitros.php" class="active">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
        <a href="../actas/listadoActas.php">
            <i class="fas fa-book"></i>
            <span>Listado de actas</span>
        </a>
        <a href="../actas/listadoAnexos.php">
            <i class="fas fa-book"></i>
            <span>Anexos</span>
        </a>
    </div>

    <div class="main">
        <div class="w3-teal">
            <div class="w3-container">
                <h1><b>Árbitros</b></h1>
            </div>
        </div>
        <br>
        <div class="w3-container">
            <a href="../insertar/insertarArbitro.html"><button class="w3-button w3-circle w3-teal">+</button></a>
            <a href="../Administrador/administrador.php"><button class="w3-btn w3-white w3-border w3-border-teal w3-round-large">Volver</button></a>
        </div>
        <br>
        <div style="overflow-x: auto;">
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Categoria</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th></th>
                    <th></th>

                </tr>
                <?php
                require('../Conexion/conexion.php');
                $conexion = conexion();

                try {

                    // Establecemos el modo de error de PDO para que salten excepciones

                    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $sql = "SELECT id,nombreArbitro, apellidos, categoria ,telefono,correo FROM arbitros ORDER BY categoria ASC";

                    $result = $conexion->query($sql);
                    
                    foreach ($result as $row) {
                        echo '<tr>';
                        echo '<td>'. $row["nombreArbitro"] .'</td> 
                        <td>'. $row['apellidos'] .'</td>
                        <td>'. $row["categoria"] .'</td>
                        <td>'. $row["telefono"] .'</td>
                        <td>'. $row["correo"] .'</td>
                        <td><a href="../editar/editarArbitro.php?id='. $row["id"] .'" ><i class="material-icons w3-xxlarge w3-text-khaki">create</i></td>
                        <td><a href="../eliminar/eliminarArbitro.php?id='. $row["id"] .'"><i class="material-icons w3-xxlarge w3-text-red">delete</i></td>
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
            <a href="../insertar/insertarArbitro.html"><button class="w3-button w3-circle w3-teal">+</button></a>
            <a href="../Administrador/administrador.php"><button class="w3-btn w3-white w3-border w3-border-teal w3-round-large">Volver</button></a>
        </div>

    </div>
</body>

</html>