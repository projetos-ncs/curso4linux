<?php

$stringConexaoPostgres = 'pgsql:host=localhost;dbname=aplicacao';
$user = 'postgres';
$pass = 'pglocal';

$objPdo = new PDO($stringConexaoPostgres, $user, $pass);
$objPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    
    $objPdo->beginTransaction();
    $query = "INSERT INTO usuario(nome, email, senha) VALUES(?,?,?)";
     $queryPrepare = $objPdo->prepare($query);
     $valores = [
         'Jair Silva',
         'jair.silva@system.com',
         '123456'
     ];
    
     $return = $queryPrepare->execute($valores);
     var_dump($return);
     $objPdo->commit();
     
} catch (PDOException $e) {
    echo $e->getMessage();   
    $objPdo->rollBack();
}