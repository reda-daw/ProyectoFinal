<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;


// Carga la configuración
$config = parse_ini_file('../Conexion/configEmail.ini');

$mail = new PHPMailer;

$mail->isSMTP();

// SMTPDebug = 0 -> desactivado (para uso en producción)
// SMTPDebug = 1 -> mensajes del cliente
// SMTPDebug = 2 -> mensajes del cliente y servidor

$mail->SMTPDebug = $config['SMTPDebug'];

$mail->Host = $config['host'];

$mail->Port = $config['port'];

$mail->SMTPAuth = $config['SMTPAuth'];

$mail->SMTPSecure = $config['SMTPSecure'];

// Usuario de google
$mail->Username = $config['username'];

// Clave
$mail->Password = $config['password'];

$mail->setFrom('arbitrosfex@gmail.com', 'Registro General Fex');

// Los destinatarios se añaden con addAdrress()

$mail->addAddress($config['email'], $config['remitente']);

// Asunto del correo

$mail->Subject = $config['asunto'];

//Recuperamos el id del partido y construimos el body

require ('../Conexion/conexion.php');

$conexion = conexion();

$id = $_GET['id'];


$query = $conexion->prepare("SELECT id,competicion, grupo,jornada,equipolocal,equipovisitante,fecha,hora,campo,localidad,arbitro,asistenteuno,asistentedos FROM partidos WHERE id = :id");
$query->execute(['id' => $id]);
$num = $query->rowCount();
if ($num > 0) {
    $row = $query->fetch(PDO::FETCH_ASSOC);
}

$mail->Body = "<p>Le ha sido designado la siguiente designacion.</p>
<p>Designacion: " . $row['id'] ."</p>
<p>Para: " . $row['arbitro'] ." <br> Fecha de comienzo: " . $row['fecha'] ." <br> Hora de comienzo: " . $row['hora'] ." <br></p>

<p>Campo: " . $row['campo'] ."<br> Localidad: " . $row['localidad'] ." <br></p>

<p>Competicion: " . $row['competicion'] ." <br>Grupo: " . $row['grupo'] ." <br> Equipo Local: " . $row['equipolocal'] ." <br> Equipo Visitante: " . $row['equipovisitante'] ."</p>
<p> Actuando como:</p>
<p>Asistente: " . $row['asistenteuno'] ." , 1 </p>
<p>Asistente: " . $row['asistentedos'] ." , 2 </p>";

$mail->msgHTML("<p>Le ha sido designado la siguiente designacion.</p>
<p>Designacion: " . $row['id'] ."</p>
<p>Para: " . $row['arbitro'] ." <br> Fecha de comienzo: " . $row['fecha'] ." <br> Hora de comienzo: " . $row['hora'] ." <br></p>

<p>Campo: " . $row['campo'] ."<br> Localidad: " . $row['localidad'] ." <br></p>

<p>Competicion: " . $row['competicion'] ." <br>Grupo: " . $row['grupo'] ." <br> Equipo Local: " . $row['equipolocal'] ." <br> Equipo Visitante: " . $row['equipovisitante'] ."</p>
<p> Actuando como:</p>
<p>Asistente: " . $row['asistenteuno'] ." , 1 </p>
<p>Asistente: " . $row['asistentedos'] ." , 2 </p>");


//Adjuntar una imagen
$mail->addAttachment('../Iconos/RFEF.png');


$mail->smtpConnect([
   'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ]
]);


// Enviar
if (!$mail->send()) {

   echo 'Error en el envío: ' . $mail->ErrorInfo;

} else {

   echo '<script language="javascript">alert("Correo Enviado");window.location.href="../Administrador/partidos.php"</script>';

}

?>