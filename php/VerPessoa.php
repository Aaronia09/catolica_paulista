<?php
require_once("classes/ClassePessoa.php");

// atribuindo valores na variaveis
$nome = "Danilo Borges";
$email = "danilodosantosborges@gmail.com";
$telefone = "015 996010243";
$datanascimento = "1996-10-17";

// criar um novo objeto
$pessoa = new Pessoa($nome, $email, $telefone, $datanascimento);

// recuperando os valores atribuidos
echo "<div><strong>Dados Pessoais</strong><br>";
$pessoa->getPessoa();
echo "</div>";
?>