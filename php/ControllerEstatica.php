<?php
include("classes/Estatica.php");

echo "</br>Voltagem: " . ExemploEstatica::$voltagem;

$volt = new ExemploEstatica();

echo "</br>Voltagem 2: " . $volt->valorVol();
?>