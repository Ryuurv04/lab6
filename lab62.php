<?php

include("class_lib.php");

$cliente1=new cliente("pepe", 1);
$cliente2=new cliente("Roberto",567);

echo "<br> El identificador del cliente 1 es: ". $cliente1->dame_numero();
echo "<br> El identificador del cliente 2 es: ". $cliente2->dame_numero();
?>