<!DOCTYPE html>
<html lang="en" dir="ltr">
<title>Administrador</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- botones con iconos -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!-- Link para el icono de la barra  -->
<link rel="shortcut icon" href="../Iconos/RFEF.png">
<!-- Link Estilo -->
<link rel="stylesheet" href="../Estilos/EstiloAd.css">
</head>

<body>

    <div class="sidebar">
        <a href="administrador.php" class="active">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
        <a href="arbitros.php">
            <i class="fas fa-link"></i>
            <span>Árbitros</span>
        </a>
        <a href="partidos.php">
            <i class="fas fa-futbol"></i>
            <span>Partidos</span>
        </a>
    </div>

    <div class="main">
        <div class="w3-teal" id="container">
            <div class="w3-container">
                <br>
                <?php
                session_start();
                $nombre = $_SESSION['nombre'];
                $perfil = $_SESSION['perfil'];
                echo $nombre . " || " . $perfil . "<br>";
                
                echo "<h1>Bienvenid@ " . $nombre;
                ?>
            </div>
           <!-- Boton para el logOut -->
            <div  id="salir">
                <a href="logOut.php"><button class="w3-button w3-teal"><b>Salir</b></button></a>
            </div>
        </div>
        <!-- Boton para añadir usuarios -->
        <div>
            <button type="button" id="usuarios" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Usuario</button>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Contenido del Modal-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Añadir Usuarios</h4>
                        </div>
                        <div class="modal-body">
                            <form action="../insertar/insertarUsuario.php" method="post">
                                <div class="w33-container">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">

                                        <label for="usuario">Usuario:</label>
                                        <input type="text" class="form-control" id="usuario" placeholder="Usuario" name="usuario"> 

                                        <label for="contraseña">Contraseña:</label>
                                        <input type="password" class="form-control" id="contraseña" placeholder="Contraseña" name="contraseña">

                                        <label for="perfil">Perfil:</label>
                                        <input type="text" class="form-control" id="perfil" placeholder="Perfil" name="perfil">

                                        <button type="submit" class="w3-btn w3-white w3-border w3-border-blue w3-round-large">Añadir</button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <h1><b>Disponibilidad de los árbitros</b><a href="../insertar/refrescarTabla.php"><i class="material-icons w3-xlarge ">refresh</i></a></h1>
        
        <div style="overflow-x: auto;">

            <table>
                <tr style="font-size: larger;">
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Disponibilidad</th>

                </tr>
                <?php
                require('../Conexion/conexion.php');
                $conexion = conexion();

                try {

                    // Establecemos el modo de error de PDO para que salten excepciones

                    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $sql = "SELECT * FROM disponibilidad";

                    $result = $conexion->query($sql);
                    
                    foreach ($result as $row) {
                        echo '<tr>';
                        echo '<td>'. $row["nombre"] .'</td> 
                        <td>'. $row['apellidos'] .'</td>
                        <td>'. $row["disponibilidad"] .'</td>
                    
                        </tr>'; 
                    }
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                $conexion = null;
                ?>
            </table>

        </div>
</body>

</html>