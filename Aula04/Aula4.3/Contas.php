<?php
class ContasBanco
{
    private $saldo;
    
    public function __set($propriedade, $valor)
    {
        
        if(! property_exists($this, $propriedade))
        {
            return;
        }
        
        $this->$propriedade = $valor;
    }
    
    public static function __callstatic($metodo, $argumentos){
        echo "<hr>$metodo não existe</hr>";
    }
    
    public function __call($metodo, $argumentos)
    {
        echo '<hr>Este metodo não existe</hr>';
    }
}

$objContas = new ContasBanco();
$objContas->saldo = 10;


echo $objContas->verSaldo();
echo $objContas::verSaldoStatico();

echo '<pre>';
print_r($objContas);