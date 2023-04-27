<?php
require_once("HerancaPessoa.php");

final class Fisica extends Pessoa
{
    private $nome, $cpf;

    function __construct($nome, $cpf, $endereco, $email, $dataCadastro)
    {
        parent::__construct($endereco, $email, $dataCadastro);
        $this->setNome($nome);
        $this->setCPF($cpf);
    }

    // método acessor
    private function setNome($nome): bool
    {
        if (is_string($nome)) {
            $this->nome = $nome;
            return true;
        } else {
            return false;
        }
    }

    // método acessor
    private function setCPF($cpf): bool
    {
        if (is_string($cpf)) {
            $this->cpf = $cpf;
            return true;
        } else {
            return false;
        }
    }

    public function exibirDados(){
        $dados=array(
            "nome"=>$this->nome,
            "cpf"=>$this->cpf,
            "endereco"=>$this->endereco,
            "email"=>$this->email,
            "dataCadastro"=>$this->dataCadastro
        );
        return json_encode($dados);
    }
}
?>