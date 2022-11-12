<?php


# Muestra procesos corriendo del equipo
#Triple Yei
$task = shell_exec("tasklist");

echo "<pre>";

echo $task ;

echo "</pre>";

?>