<?php 

interface FreteInterface
{
    public function getValorFrete();
}

Class FreteMotoboy implements FreteInterface
{
    protected $valorFrete = 20;
    
    public function getValorFrete()
    {
        return $this->valorFrete;
    }    
}


Class FreteSedex implements FreteInterface
{
    protected $valorFrete = 30;
    
    public function getValorFrete()
    {
        return $this->valorFrete;
    }
}


class Pedido
{
    protected $total;
    protected $valorPedido;
    
    public function calcularTotal(float $valor, FreteInterface $frete){
        
        $this->valorPedido = $valor;
        $this->total = $this->valorPedido + $frete->getValorFrete();
        
        return $this->total;
    }
}



$pedido = new Pedido();
$total = $pedido->calcularTotal(2000, new FreteMotoBoy());

echo "total do Pedido: $total";

