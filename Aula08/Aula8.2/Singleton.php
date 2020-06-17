<?php 
class Singleton
{    
 
    private static  $conn;
    
    private function __construct()
    {
        
    }
    
    public function __clone()
    {}
    
    public static function getConn(){
        
        $dsn  = 'pgsql:host=localhost;dbname=aplicacao';
        $user = 'postgres';
        $pass = 'pglocal';
        
        if(!self::$conn){
            self::$conn = new PDO($dsn, $user, $pass);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$conn;
    }   
}

$conn1 = Singleton::getConn();
$conn2 = Singleton::getConn();

echo '<pre>';
var_dump($conn1);
echo'<hr>';
var_dump($conn2);
