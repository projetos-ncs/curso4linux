<?php 

class Jogador
{
    protected $nome;
    protected $nivel;
    protected $vida;
    
    public  function __construct(string $nome, int $nivel) {
        $this->nome = $nome;
        $this->nivel = $nivel;
        $this->vida = 100;
    }
    
    public function __sleep()
    {
        echo '<hr>Metodo sleep executado<hr>';
        return ['nome','nivel'];
    }
    
    public function __wakeup()
    {
        echo '<hr>Metodo wakeup executado<hr>';
        $this->vida = 200;
    }
}

$objJogador = new Jogador('Jogador 1', 1);
$objSerial = serialize($objJogador);
echo $objSerial;

echo '<hr><pre>';

$objReal = unserialize($objSerial);
print_r($objReal);