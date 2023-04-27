<?php
require_once("classes/ContaCorrente.php");

$cliente1 = new ContaCorrente("1234-5", "151515-2", "Danilo Borges", 1500.05, 500.00);
$cliente1->depositar(500.25);
echo $resultado1=$cliente1->exibirExtrato();
echo "</br>";
$cliente1->retirada(1000.25);
echo $resultado2=$cliente1->exibirExtrato();
?>