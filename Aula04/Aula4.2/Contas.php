<?php 
class ContaBanco {
    
    protected $saldo;
    
    function __construct($valor)
    {
       $this->saldo = $valor ;
    }
    
    public function __toString() {
        return 'Saldo: ' .  $this->saldo;
    }
    
    public function __invoke($valor) {
        $this->saldo += $valor;
    }
}



$objConta = new ContaBanco(500);
$objConta(500);
echo $objConta;

echo '<hr>';
var_dump(is_callable($objConta));