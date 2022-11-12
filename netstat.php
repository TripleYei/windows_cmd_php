<?php


# Muestra las conexiones activas de tu equipo en el navegador
#Triple Yei
$network = shell_exec("netstat -a");

echo "<pre>";

echo $network ;

echo "</pre>";

?>