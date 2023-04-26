<?php
require_once("ClassePessoaH.php");

class Fisica extends Pessoa
{
    private $nome, $cpf;

    function __construct($nome, $cpf, $endereco, $email, $dataCadastro)
    {
        parent::__construct($endereco, $email, $dataCadastro);
        $this->setNome($nome);
        $this->setCPF($cpf);
    }

    function setNome($nome): bool
    {
        if (is_string($nome)) {
            $this->nome = $nome;
            return true;
        } else {
            return false;
        }
    }

    function setCPF($cpf): bool
    {
        if (is_string($cpf)) {
            $this->cpf = $cpf;
            return true;
        } else {
            return false;
        }
    }
}

?>