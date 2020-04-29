<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$header = 'From: ' . $email. "\r\n";
$header .= "X-Mailer: PHP/". phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n ";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ", \r\n";
$mensaje .= "Su e-mail es: " . $email . "\r\n";
$mensaje .= "El telefono es :" . $telefono . ", \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = "carolina.formia@gmail.com";
$asunto = "Descarga pdf";

mail($para, $asunto, utf8_decode($mensaje) ,$header);

header("Location:gracias.html");



?>