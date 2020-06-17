<?php

class PalavraCollection implements IteratorAggregate
{
    private $itens = [];
    
    public function getItens():array
    {
        return $this->itens;
    }
    
    public function addItem(string $item)
    {
        $this->itens[] = $item;
    }
    
    public function getIterator():Iterator
    {
        return new OrdemAlfabeticaIterator($this);
    } 
    
    public function getReverseIterator():Iterator
    {
        return new OrdemAlfabeticaIterator($this, true);
    }
}

class OrdemAlfabeticaIterator implements Iterator
{
   
    private $colecao;
    private $posicao;
    private $reverso = false;
    
    
    public function  __construct(PalavraCollection $palavras, bool $reverson = false)
    {
        $this->colecao = $palavras;
        $this->reverson = $reverson;
    }
    
    public function next()
    {
            $this->posicao  = $this->posicao + ($this->reverso ? -1 : 1);
    }

    public function valid()
    {
        return isset($this->colecao->getItens()[$this->posicao]);
    }

    public function current()
    {
        return $this->colecao->getItens()[$this->posicao];
    }

    public function rewind()
    {
        $this->posicao  = ($this->reverso) ? count($this->colecao->getItens()) -1 : 0;
    }

    public function key()
    {
        return $this->posicao;
    }
    
}

$colecaoPalavras = new PalavraCollection();
$colecaoPalavras->addItem("Primeiro");
$colecaoPalavras->addItem("Segundo");
$colecaoPalavras->addItem("Terceiro");

echo "<hr>Ordem Normal<hr>";
foreach ($colecaoPalavras->getIterator() as $dado)
{
       echo "$dado<br>";
}


echo "<hr>Ordem Reversa<hr>";
foreach ($colecaoPalavras->getReverseIterator() as $dado)
{
    echo "$dado<br>";
}










