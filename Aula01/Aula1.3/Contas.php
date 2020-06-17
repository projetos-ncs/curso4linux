<?php

class Contas13
{
    public $saldoConta = 0;
    
    const TIPO = 'PJ';
    
    public function verSaldo()
    {
        echo 'Executei o método verSaldo';
    }
}

$objContas1 = new Contas13();
$objContas2 = new Contas13();

var_dump($objContas1);
echo '<hr>';
var_dump($objContas2);

echo '<hr>';

echo 'Saldo: ' . $objContas1->verSaldo()."<br>";
$objContas1->verSaldo();

echo '<hr>';

echo 'Constante: ' . Contas::TIPO;
