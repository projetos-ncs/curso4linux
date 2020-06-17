<?php 

$stringConexaoPostgres = 'pgsql:host=localhost;dbname=aplicacao';
$user = 'postgres';
$pass = 'pglocal';

$objPdo = new PDO($stringConexaoPostgres, $user, $pass);
$objPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//var_dump($objPdo);

try {
    $sql = 'SELECT * FROM usuario';
    $return = $objPdo->query($sql);
    $registros = $return->fetchAll(PDO::FETCH_ASSOC);
    echo '<pre>';
    print_r($registros);
    echo '<hr>';
    $sql = 'SELECT * FROM usuario WHERE ID = 1';
    $return = $objPdo->query($sql);
    $registros = $return->fetch(PDO::FETCH_ASSOC);
    print_r($registros);
    
    $query = "INSERT INTO usuario(nome, email, senha) VALUES('Ricardo Vila','ricardo.vilas@system.com.br','123456')";
    var_dump($objPdo->exec($query));
    
    
} catch (PDOException $e) {
    echo $e->getMessage() . ' | ' . $e->getCode();
}