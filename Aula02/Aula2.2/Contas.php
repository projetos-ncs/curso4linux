<?php

class Contas22
{
    protected $saldo = 10;
    protected $teste = 15;

    public function depositar(float $valor)
    {
        $this->saldo += $valor;
    }

    final public function verSaldo()
    {
        return $this->saldo;
    }
}

final class ContaCorrente extends Contas22
{
        public function teste()
        {
            return $this->teste;
        }
}

final class ContaPoupanca extends Contas22
{

}

$cp = new ContaPoupanca();
var_dump($cp);

echo '<hr>';


$conta = new Contas22();
$conta->depositar(100);
echo $conta->verSaldo();

echo '<hr>';

$contaCorrente = new ContaCorrente();
echo 'Saldo C.C: ' . $contaCorrente->verSaldo();

echo '<hr>';
echo 'Teste C.C: ' . $contaCorrente->teste();


