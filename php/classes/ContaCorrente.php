<?php
require_once("Conta.php");

class ContaCorrente extends Conta
{
    private $limite;

    function __construct($agencia, $numeroConta, $titular, $saldo, $limite)
    {   
        parent::__construct($agencia, $numeroConta, $titular, $saldo);
        $this->setLimite($limite);
    }

    public function retirar($valor):bool{
        if (($this->getSaldo() + $this-> getLimite()) > $valor)
        {
            parent::retirar($valor);
            return true;
        } else {
            return false;
        }
    }

    public function exibirExtrato(){
        $dados = 
        [
            "Titular"=>$this->getTitular(),
            "Agencia"=>$this->getAgencia(),
            "Conta"=>$this->getNumeroConta(),
            "Saldo"=>$this->getSaldo()
        ];
        return json_encode($dados);
    }

    public function setLimite($limite)
    {
        $this->limite = $limite;
    }

    //  métodos get
    public function getLimite()
    {
        return $this->limite;
    }
}
?>