<?php

class Contas52
{
    protected  $saldo = 0;
    
    
    function sacar(float $valor) {
        if($valor > $this->saldo){
            throw  new SaldoInsuficienteException("Saldo insuficiente: {$this->saldo} disponive",10);
        }
        
        $this->saldo -= $valor;
    }
}

class SaldoInsuficienteException extends Exception
{}

try {
    $conta = new Contas52();
    $conta->sacar(200);
} catch (SaldoInsuficienteException $e) {
   echo $e->getMessage();
   echo '<br>';
   echo 'Codigo do erro: ' . $e->getCode();
}finally {
    echo '<hr>Codigo executado apos o try';
}


