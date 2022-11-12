<?php


# Muestra el servidor DNS
#Triple Yei
$dns = shell_exec("nslookup");

echo "<pre>";

echo $dns ;

echo "</pre>";

?>