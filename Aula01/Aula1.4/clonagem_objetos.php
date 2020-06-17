<?php 

class Contas14
{
    public $saldo = 50;
    
    public function __clone(){
        echo '<hr>';
        echo 'Executando o metod magido clones<br>';
        echo __METHOD__;
        echo '<hr>';
    }
}

$conta1 = new Contas14();
var_dump($conta1);

$conta2 = clone $conta1;

echo '<hr>';

var_dump($conta2);

echo '<hr>';

$conta2->saldo = 100;

echo '<hr>';

var_dump($conta1);

echo '<hr>';

var_dump($conta2);

