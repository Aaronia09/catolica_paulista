<?php
include("classes/ClasseEstatica.php");

echo "</br>Voltagem: " . ExemploEstatica::$voltagem;

$volt = new ExemploEstatica();

echo "</br>Voltagem 2: " . $volt->valorVol();
?>