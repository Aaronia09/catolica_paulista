<?php
require_once("classes/HerancaFisica.php");
require_once("classes/HerancaJuridica.php");

$pessoaFisica = new Fisica("Danilo Borges", "123456789", "Rua 1", "danilo@borges.com", "2023-05-25");
// print_r($pessoaFisica);
$dados1 = $pessoaFisica->exibirDados();
echo $dados1;

$pessoaJuridica = new Juridica("Catolica Paulista", "00.000.000-1/15", "Rua 1", "teste@teste.com", "17-10-1996");
// print_r($pessoaJuridica);
$dados2 = $pessoaJuridica->exibirDados();
echo $dados2;
?>