<?php
$destino=$_POST['alexxytb19@gmail.com'];
$asunto="comentario";

$comentario="
Email:$_POST[email]
Comentario:$_POST[com]";

$headers='From:'.$_POST['email']."\r\n".
'Reply-To:'.$_POST['email']."\r\n".
'X-Mailer:PHP/'.phpversion();

mail($destino,$asunto,$comentario,$headers);

echo"mensaje enviado";
?>