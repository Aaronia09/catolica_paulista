<?php
class Mesa
{
    public $quantidadePernas, $tipo, $formaGeometrica;
    //  função construtora
    function __construct()
    {
    }

    private function setQuantidadePernas($qtdPernas): bool
    {
        if (is_int($qtdPernas)) {
            $this->quantidadePernas = $qtdPernas;
            return true;
        } else {
            return false;
        }
    }

    private function setTipo($tipo): bool
    {
        if (is_string($tipo)) {
            $this->tipo = $tipo;
            return true;
        } else {
            return false;
        }
    }

    private function setForma($forma): bool
    {
        if (is_string($forma)) {
            $this->formaGeometrica = $forma;
            return true;
        } else {
            return false;
        }
    }

    // função adicionar a mesa
    public function adicionarMesa($qtdPernas, $tipo, $forma): bool
    {
        if ($this->setQuantidadePernas($qtdPernas) && $this->setTipo($tipo) && $this->setForma($forma)) {
            return true;
        } else {
            return false;
        }
    }
    // função mostrar a mesa
    public function mostrarMesa(): string
    {
        return "Mesa " . $this->formaGeometrica . " com " . $this->quantidadePernas . " pernas, do tipo " . $this->tipo . ".";
    }
}
?>