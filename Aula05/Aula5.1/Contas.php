<?php 

class Contas51
{
    protected  $saldo = 0;
    
       
    function sacar(float $valor) {
        if($valor > $this->saldo){
            throw  new Exception("Saldo insuficiente: {$this->saldo} disponive");
        }
    }
}

$conta = new Contas51();
$conta->sacar(200);