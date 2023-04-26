<?php
require_once("ClassePessoaH.php");

class Juridica extends Pessoa
{
    private $razaoSocial, $cnpj;

    function __construct($razaoSocial, $cnpj, $endereco, $email, $dataCadastro)
    {
        parent::__construct($endereco, $email, $dataCadastro);
        $this->setNome($razaoSocial);
        $this->setCPF($cnpj);
    }

    function setNome($razaoSocial): bool
    {
        if (is_string($razaoSocial)) {
            $this->razaoSocial = $razaoSocial;
            return true;
        } else {
            return false;
        }
    }

    function setCPF($cnpj): bool
    {
        if (is_string($cnpj)) {
            $this->cnpj = $cnpj;
            return true;
        } else {
            return false;
        }
    }
}

?>