<?php
require_once("classes/Pessoa.php");

// criar um novo objeto
$pessoa = new Pessoa();

// atribuindo valores na variaveis
$pessoa->nome = "Danilo Borges";
$pessoa->email = "danilodosantosborges@gmail.com";
$pessoa->telefone = "015 996010243";
$pessoa->datanascimento = "1996-10-17";

// recuperando os valores atribuidos
echo "<div><strong>Dados Pessoais</strong><br>";
$pessoa->getPessoa();
echo "</div>";
?>