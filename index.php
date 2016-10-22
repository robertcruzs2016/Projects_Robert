<?php
$string = "Só pode haver um!";
$codificada = md5($string);
echo "Resultado de senha criptografada: ".$codificada;
?>