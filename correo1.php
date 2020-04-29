<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$asunto = $_POST['asunto'];

$header = 'From: ' . $email. "\r\n";
$header .= "X-Mailer: PHP/". phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n ";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ", \r\n";
$mensaje .= "Su apellido es :" . $apellido . ", \r\n";
$mensaje .= "Su e-mail es: " . $email . "\r\n";
$mensaje .= "La consulta o el mensaje es: " . $msg . ", \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());


$para = "carolina.formia@gmail.com";

mail($para, $asunto, utf8_decode($mensaje) ,$header);

header("Location:index.html");



?>