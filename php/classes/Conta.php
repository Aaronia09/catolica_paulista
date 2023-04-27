<?php
class Conta
{
    // elementos
    protected $agencia, $numeroConta, $titular, $saldo;
    // construtor
    function __construct($agencia, $numeroConta, $titular, $saldo)
    {
        $this->setAgencia($agencia);
        $this->setNumeroConta($numeroConta);
        $this->setTitular($titular);
        $this->setSaldo($saldo);
    }
    // funções
    public function depositar($valor)
    {
        if (is_float($valor) > 0) {
            $this->setSaldo($this->getSaldo() + $valor);
        }
    }

    public function retirada($valor)
    {
        if (is_float($valor) > 0) {
            if ($this->getSaldo() > 0) {
                if ($this->getSaldo() > 0) {
                    $this->setSaldo($this->getSaldo() - $valor);
                }
            }
        }
    }

    // métodos set
    public function setAgencia($agencia): bool
    {
        $this->agencia = $agencia;
        return true;
    }

    public function setNumeroConta($numeroConta): bool
    {
        $this->numeroConta = $numeroConta;
        return true;
    }

    public function setTitular($titular): bool
    {
        $this->titular = $titular;
        return true;
    }

    public function setSaldo($saldo): bool
    {
        $this->saldo = $saldo;
        return true;
    }

    //  métodos get
    public function getSaldo()
    {
        return $this->saldo;
    }

    public function getAgencia()
    {
        return $this->agencia;
    }

    public function getNumeroConta()
    {
        return $this->numeroConta;
    }

    public function getTitular()
    {
        return $this->titular;
    }
}