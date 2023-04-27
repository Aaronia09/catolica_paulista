<?php
require_once("classes/Mesa.php");

$mesa = new Mesa();
$mesa->adicionarMesa(4, "Madeira Rústica", "Retangular");

echo "Mesa Cadastrada: " . $mesa->mostrarMesa();
?>