<?php

class Pessoa
{

    public $id;
    public $nome;
    public $email;

    public function __construct(int $id, string $nome, string $email)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        echo '<hr> Objeto instanciado<hr>';
    }

    public function __destruct()
    {
        echo '<hr> Objeto destruido<hr>';
        
        echo 'Id: ' . $this->id;
        echo 'Id: ' . $this->nome;
        echo 'Id: ' . $this->email;
        echo 'erro';
    }

}

$pessoa = new Pessoa(10, 'Nilo Souza', 'nilo.contatos@gmail.com');

echo '<pre>';
var_dump($pessoa);