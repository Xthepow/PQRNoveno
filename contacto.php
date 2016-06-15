<?php
@$nombre = addslashes($_POST['nombre']);
@$email = addslashes($_POST['email']);
@$mensaje = addslashes($_POST['mensaje']);
 
$cabeceras = "From: $email\n" 
 . "Reply-To: $email\n";
$asunto = "Mensaje desde la pagina Web"; 
$email_to = "marode1994@gmail.com";
$contenido = "$nombre ha enviado un mensaje desde la web www.miweb.com\n"
. "\n"
. "Nombre: $nombre\n"
. "Email: $email\n"
. "Mensaje: $mensaje\n"
. "\n";
 
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {
 
die("Gracias, su mensaje se envio correctamente.");
}else{
 
die("Error: Su información no pudo ser enviada, intente más tarde");
}
?>
