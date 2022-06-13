<!DOCTYPE html>
<html lang="en" dir="ltr">
<title>Árbitro</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Link para el icono de la barra  -->
<link rel="shortcut icon" href="../Iconos/RFEF.png">
<!-- Link Estilo -->
<link rel="stylesheet" href="../Estilos/EstiloAd.css">
</head>

<body>
    <div class="sidebar">
        <a href="Arbitro.php" class="active">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>

        <a href="../actas/acta.html">
            <i class="fas fa-book"></i>
            <span>Gestion de actas</span>
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
                echo $nombre;
                echo " || " . $perfil;
                echo "<h1>Bienvenid@ " . $nombre;
                ?>
            </div>
            <div id="salir">
                <a href="../loginLogOut/logOut.php"><button class="w3-button w3-teal"><b>Salir</b></button></a>
            </div>
        </div>
        <div class="botonera">
        <!-- Boton para el anexo -->
        <div >
            <button type="button" id="anexo" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Modal">Anexo</button>
            <div class="modal fade" id="Modal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Anexo</h4>
                        </div>
                        <div class="modal-body">
                            <form action="../actas/anexos.php" method="post">
                                <div class="w33-container">

                                    <label for="arbitro">Árbitro:</label>
                                    <input type="text" class="form-control" id="arbitro" placeholder="Árbitro" name="arbitro">
                                    <br>
                                    <label for="equipolocal">Equipo Local:</label>
                                    <input type="text" class="form-control" id="equipolocal" placeholder="Equipo Local" name="equipolocal">
                                    <br>
                                    <label for="equipovisitante">Equipo Visitante:</label>
                                    <input type="text" class="form-control" id="equipovisitante" placeholder="Equipo Visitante" name="equipovisitante">
                                    <br>
                                    <label for="descripcion">Descripción:</label><br>
                                    <textarea name="descripcion" id="descripcion" cols="30" rows="5"></textarea>
                                    <br>
                                    <br>
                                    <button type="submit" class="w3-btn w3-white w3-border w3-border-blue w3-round-large">Enviar</button>
                                    
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
        <!-- Boton para la disponibilidad -->
        <div >
            <button type="button" id="disponibilidades" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Disponibilidad</button>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Disponibilidad</h4>
                        </div>
                        <div class="modal-body">
                            <form action="../insertar/disponibilidad.php" method="post">
                                <div class="w33-container">

                                    <label for="nombre">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">

                                    <label for="apellidos">Apellidos:</label>
                                    <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" name="apellidos">

                                    <label for="disponibilidad">Disponibilidad:</label>
                                    <input type="text" class="form-control" id="disponibilidad" placeholder="Disponibilidad" name="disponibilidad">

                                    <button type="submit" class="w3-btn w3-white w3-border w3-border-blue w3-round-large">Enviar</button>
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
        </div>
        <br>
        <br>
        <h1><b>Información</b></h1>

        <table>
            <tr>
                <th><b>Bases de Competición</b></th>
                <th><b>Descarga</b></th>
                <th><b>Reglamento</b></th>
            </tr>
            <tr>
                <td><strong><span style="color: #116d0e;"> 1ª RFEF</span></td>
                <td><b><a href="https://rfef.es/sites/default/files/images19/002_primera_rfef.pdf">MODELO 1</a></b></td>
                <td><b><a href="https://www.theifab.com/es/">IFAB 21/22</a></b></td>
            </tr>
            <tr>
                <td><strong><span style="color: #116d0e;"> 2ª RFEF</span></td>
                <td><b><a href="https://rfef.es/sites/default/files/images19/003_segunda_division_b_segunda_rfef.pdf">MODELO 2</a></b></td>
                <td></td>
            </tr>
            <tr>
                <td><strong><span style="color: #116d0e;"> 3ª RFEF</span></td>
                <td><b><a href="https://www.rfef.es/sites/default/files/images19/004_tercera_division_tercera_rfef.pdf">MODELO 3</a></b></td>
                <td></td>
            </tr>
            <tr>
                <td><strong><span style="color: #116d0e;"> COPA RFEF</span></strong></td>
                <td><b><a href="https://files.fexfutbol.com/pnfg/varios/documentos/20-21/bases_coparfef2021.pdf">MODELO 4</a></b></td>
                <td></td>
            </tr>
            <tr>
                <td><strong><span style="color: #116d0e;"> COPA RFEF FEMENINO</span></strong></td>
                <td><b><a href="https://files.fexfutbol.com/pnfg/varios/documentos/20-21/bases_coparfef2021.pdf">MODELO 5</a></b></td>
                <td></td>
            </tr>

            <tr>
                <td><strong><span style="color: #116d0e;"> 1ª FEMENINO</span></td>
                <td><b><a href="  https://www.rfef.es/sites/default/files/circular_15_futbol_femenino_aficionado_120821_def_pdf.pdf">MODELO 6</a></b></td>
                <td></td>
            </tr>
            <tr>
                <td><strong><span style="color: #116d0e;"> 1ª FEXF</span></strong></td>
                <td><b><a href="https://www.futbol-regional.es/archivos/bases_de_competicion/2021/EXT_1_Primera_Division_Extreme%C3%B1a.pdf">MODELO 7</a></b></td>
                <td></td>
            </tr>
            <tr>
                <td><strong><span style="color: #116d0e;"> 2ª FEXF </span></strong></td>
                <td><b><a href="https://www.futbol-regional.es/archivos/bases_de_competicion/2021/EXT_2_Segunda_Division_Extreme%C3%B1a.pdf">MODELO 8</a></b></td>
                <td></td>
            </tr>
            <tr>
                <td><strong><span style="color: #116d0e;"> JUVENIL NACIONAL </span></strong></td>
                <td><b><a href="https://www.rfef.es/sites/default/files/images19/014_liga_nacional_juvenil.pdf">MODELO 9</a></b></td>
                <td></td>
            </tr>
        </table>
    </div>

</body>

</html>