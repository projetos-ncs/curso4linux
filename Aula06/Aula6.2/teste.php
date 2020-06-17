<?php 

require_once 'autoload.php';

use Lib\Banco\Conexao;
use Vendor\FourLinux\Filter;


$objConexao = new Conexao();
$objFilter = new Filter();

var_dump($objFilter);
echo '<br>';
var_dump($objConexao);


