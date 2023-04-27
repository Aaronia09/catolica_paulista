<?php
require_once("classes/Funcionario.php");

$pessoa = new Funcionario();
$pessoa->setNome("Danilo Borges");
$pessoa->setEmail("danilodosantosborges@gmail.com");
$pessoa->setSalario(1500.00);

echo ("Nome: ") . $pessoa->getNome();
echo ("<br>E-mail: ") . $pessoa->getEmail();
echo ("<br>Salário: ") . $pessoa->getSalario();
?>