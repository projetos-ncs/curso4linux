<?php 

$stringConexaoPostgres = 'pgsql:host=localhost;dbname=aplicacao';
$user = 'postgres';
$pass = 'pglocal';

$objPdo = new PDO($stringConexaoPostgres, $user, $pass);
$objPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {  
    
    $objPdo->beginTransaction();
    $query = "INSERT INTO usuario(nome, email, senha) VALUES('Ricardo Vila','ricardo.vilas@system.com.br','123456')";
    
    for($x = 0; $x <= 1000; $x++)
    {       
        $objPdo->exec($query);        
        if($x == 510){
            $query = "INSERT INTO usuario(nome, email, senha) V";                     
        }        
    }
    $objPdo->commit();    
    
} catch (PDOException $e) {
    echo $e->getMessage();
    echo'<br>';
    echo 'Rolback Efetuado!';
    $objPdo->rollBack();
}