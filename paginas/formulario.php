<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="stylesheet" type="text/css" href="../css/demo.css" />
<link rel="stylesheet" type="text/css" href="../css/icons.css" />
<link rel="stylesheet" type="text/css" href="../css/component.css" />
<link href='http://fonts.googleapis.com/css?family=Lato:100,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<title>Untitled Document</title>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script src="../js/modernizr.custom.js"></script>
<style>
p{margin-top:190; text-align:center; font-size: 18px; font-weight: 300; font-color: #333; margin-top:190px; font-family:sans-serif;}
</style>
</head>

<body>

<?php header('Content-Type: charset=utf-8');

if(isset($_POST['submit'])){
  $to  = 'francisco.lago@condenast.com.mx' . ', ';
  $to .= 'luis.orezza@condenast.com.mx';
  
  
  
  $from = $_POST['email']; 
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $mensaje = $_POST['mensaje'];
  
  $headers = "MIME-Version: 1.0 \r\n";
  $headers .= "Content-type: text/html; charset=UTF-8 \r\n";
  
  
  $subject = "Consulta de servicios";
  
  $mensaje =  
  "LOS DATOS RECIBIDOS SON:" .
   "\n NOMBRE:  " . $nombre . 
  " \n APELLIDO:  " . $apellido . 
  "\n CORREO: " . $from .
  "\n MENSAJE: " . $mensaje ;

  

  $headers = "From:" . $from;
  $headers2 = "From:" . $to;
  
  }
  
  
if (mail($to,$subject,$mensaje,$headers)) {
  echo "<p>Tu email se ha enviado con éxito</p>" ;

} else {
  echo  $nombre . "<p>Hubo un error en el envío, inténtalo nuevamente</p>";
}	

  
?>
</body>
</html>