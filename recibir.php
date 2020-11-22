<?php
$destinatario='leonelcalle05@gmail.com';
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];

$header="Enviado desde la Pagina RC";
$atent=
$mensajecompleto=$mensaje." Atentamente: $nombre";
mail($destinatario, $header, $mensajecompleto);
echo "<script>alert('Correo enviado exitosamente');</script>";
echo "<script>setTimeout(\"location.href='index.html'\",0.500)</script>";
?>
