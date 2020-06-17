<?php

/**
 * @class
 * 
 * 
 * */
class Contas {
    
    protected static $saldo = 50;
    
    public static function verSaldo()
    {
        return static::$saldo;
    }
}

class ContaCorrente extends Contas
{
    protected  static $saldo = 500;
}


echo Contas::verSaldo();
echo '<hr>';
echo ContaCorrente::verSaldo();
