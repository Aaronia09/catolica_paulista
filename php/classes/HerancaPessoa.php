<?php
// classe
abstract class Pessoa
{
    // elementos
    protected $endereco, $email, $dataCadastro;

    // contrutor  
    function __construct($endereco, $email, $dataCadastro)
    {
        //atribuição dos elementos com métodos acessores
        $this->setEndereco($endereco);
        $this->setEmail($email);
        $this->setDataCadastro($dataCadastro);
    }

    // método acessor
    private function setEndereco($endereco): bool
    {
        if (is_string($endereco)) {
            $this->endereco = $endereco;
            return true;
        } else {
            return false;
        }
    }

    // método acessor
    private function setEmail($email): bool
    {
        if (is_string($email)) {
            $this->email = $email;
            return true;
        } else {
            return false;
        }
    }

    // método acessor
    private function setDataCadastro($dataCadastro): bool
    {
        if (is_string($dataCadastro)) {
            $this->dataCadastro = $dataCadastro;
            return true;
        } else {
            return false;
        }
    }

    abstract public function exibirDados();
}
?>