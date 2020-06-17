<?php 


abstract class Contas
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
    
    public abstract  function gerarLog();
}

final class ContaCorrente extends Contas
{
    public function gerarLog()
    {
        echo 'Log gerado...';
    }
}


$objConta = new ContaCorrente();
$objConta->depositar(100);
$objConta->verSaldo();

echo 'Saldo: '  . $objConta->verSaldo();
echo '<hr>';
echo 'Log: '  . $objConta->gerarLog();

