<?php


interface InterfaceFrete
{
    public function calcularFrete(float $valor);
    public function getValorFrete();
}

class MotoBoy implements InterfaceFrete
{
    const valorFrete = 20;
    protected $valorComFrete =0;
    
    public function calcularFrete(float $valor)
    {
        $this->valorComFrete = $valor + self::valorFrete;
    }

    public function getValorFrete()
    {
        return $this->valorComFrete;
    }    
}

class Correios implements InterfaceFrete
{
    const valorFrete = 50;
    protected $valorComFrete =0;
    
    public function calcularFrete(float $valor)
    {
        $this->valorComFrete = $valor + self::valorFrete;
    }
    
    public function getValorFrete()
    {
        return $this->valorComFrete;
    }
}

class Aplicacao
{
    public function calcularTotal($valorCompra, InterfaceFrete $frete)
    {
        $frete->calcularFrete($valorCompra);
        return $frete->getValorFrete();
    }
}

$app = new Aplicacao();
$freteMoto = new MotoBoy();
$freteCorreios = new Correios();
$valorCompra = 200;

$valorTotal = $app->calcularTotal($valorCompra,$freteMoto);
echo 'Total com Moto: ' . $valorTotal;

echo '<br>';

$valorTotal = $app->calcularTotal($valorCompra,$freteCorreios);
echo 'Total com correios ' . $valorTotal;

















