<?php


$nombre = $_POST["vname"];
$correo = $_POST["vemail"];
$asunto = $_POST["sub"];
$mensaje = $_POST["msg"];



if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["sub"]==""||$_POST["msg"]==""){
echo "Porfavor llena todos los campos";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['vemail'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Correo Inválido";
}
else{
$subject = $_POST['sub'];
$message = $_POST['msg'];
$headers = 'From:'. $email . "\r\n"; // Sender's Email
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);

"LOS DATOS RECIBIDOS SON:<br/><br/>
<strong>NOMBRE:</strong><br/>" . $nombre . "<br/><br/>
<strong>APELLIDO PATERNO:</strong><br/>" . $correo . "<br/><br/>
<strong>APELLIDO MATERNO:</strong><br/>" . $mensaje . "<br/><br/>";


// Send Mail By PHP Mail Function



mail("francisco.lago@condenast.com.mx", $subject, $message, $headers);
echo "Tu mail se ha enviado";
}
}
}
?>