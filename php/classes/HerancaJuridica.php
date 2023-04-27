<?php
require_once("HerancaPessoa.php");

final class Juridica extends Pessoa
{
    private $razaoSocial, $cnpj;

    function __construct($razaoSocial, $cnpj, $endereco, $email, $dataCadastro)
    {
        parent::__construct($endereco, $email, $dataCadastro);
        $this->setrazaoSocial($razaoSocial);
        $this->setCPF($cnpj);
    }

    private function setrazaoSocial($razaoSocial): bool
    {
        if (is_string($razaoSocial)) {
            $this->razaoSocial = $razaoSocial;
            return true;
        } else {
            return false;
        }
    }

    private function setCPF($cnpj): bool
    {
        if (is_string($cnpj)) {
            $this->cnpj = $cnpj;
            return true;
        } else {
            return false;
        }
    }

    public function exibirDados(){
        $dados=array(
            "razaoSocial"=>$this->razaoSocial,
            "cnpj"=>$this->cnpj,
            "endereco"=>$this->endereco,
            "email"=>$this->email,
            "dataCadastro"=>$this->dataCadastro
        );
        return json_encode($dados);
    }
}
?>