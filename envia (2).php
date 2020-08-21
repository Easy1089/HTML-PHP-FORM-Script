<?php
$remitente = $_POST['email'];
$destinatario = 'destinatario@gmail.com'; // en esta línea va el mail del destinatario.
$asunto = 'Mensaje desde el Sitio Web'; // Personaliza el mensaje que llega al destinatario
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre y apellido: " . $_POST["name"] . "\r\n";
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
    $cuerpo .= "Celular: " . $_POST["phone"] . "\r\n";
    $cuerpo .= "Provincia: " . $_POST["provincia"] . "\r\n";
    $cuerpo .= "Mensaje: " . $_POST["message"] . "\r\n";
    
    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
     $headers .= "From: \"".$_POST['name']." <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'index.html'; // Se puede colocar la pagina personalizada de envio de mensaje.
}
?>
