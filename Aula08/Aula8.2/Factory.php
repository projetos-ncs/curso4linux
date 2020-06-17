<?php 
class Conta83
{
    protected $saldo = 0;
    protected $cpf;
    protected $banco;
    
    public function __construct(float $saldo, string $cpf, string $banco)
    {
        $this->saldo = $saldo;
        $this->cpf = $cpf;
        $this->banco = $banco;
        
    }
}


class FabricaContas
{
    public static function create()
    {
        return new Conta83(100, '292.505.897-10','bancox');
    }
}

$conta1 = FabricaContas::create();
var_dump($conta1);
