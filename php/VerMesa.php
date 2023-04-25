<?php
require_once("classes/ClasseMesa.php");

$mesa = new Mesa();

$mesa->adicionarMesa(4, "Madeira Rústica", "Retangular");

echo "Mesa Cadastrada: " . $mesa->mostrarMesa();
?>