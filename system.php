<?php

#Muestra información del equipo
#Triple Yei
$info = shell_exec("systeminfo");

echo "<pre>";

echo $info ;

echo "</pre>";

?>