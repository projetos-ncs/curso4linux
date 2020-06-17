<?php 
namespace Banco\Bradesco;

class Banco
{
    public $nome = 'Bradesco';
}

class Agencia{
    public $nome = 'URB-JOAOCOSTA';
}

namespace Banco\Itau;
use Banco\Bradesco\Banco as BancoBradesco;
class banco
{
    public $nome = 'Itau';
}

class Agencia{
    public $nome = 'IT-VILAMARIANA';
}


$banco1 = new Banco();
$bancoBradesco = new BancoBradesco();
$agencia = new Agencia();

var_dump($banco1);
echo '<br>';
var_dump($agencia);
echo '<br>';
var_dump($bancoBradesco);






