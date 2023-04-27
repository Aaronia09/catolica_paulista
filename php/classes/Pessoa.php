<?php
class Pessoa
{ // criancao de uma classe
    // atributos
    public $nome;
    public $email;
    public $telefone;
    public $datanascimento;

    // construtor
    function __construct($nome, $email, $telefone, $datanascimento)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->datanascimento = $datanascimento;
    }

    // metodo
    public function getPessoa()
    {
        echo "<br>Nome: " . $this->nome;
        echo "<br>Email: " . $this->email;
        echo "<br>Telefone: " . $this->telefone;
        echo "<br>Data Nascimento: " . $this->datanascimento;
    }

    function __destruct()
    {
        echo ("Objeto Finalizado!");
    }
}
;
?>