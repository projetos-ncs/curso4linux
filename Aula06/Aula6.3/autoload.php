<?php 
spl_autoload_register(function($class){
    
    $prefix  = 'LIB\DB';
    $baseDir = __DIR__ . '/src/';
    $len = strlen($prefix);
    
    
    echo 'Prefix: ' .  $prefix.'<br>';
    echo 'Tamanho da classe: '.$class.'<br>';
    echo 'Tamanho: '.$len.'<br>';
    
    if (strncasecmp($prefix, $class, $len)) {
        echo '<hr>Classe não encontrada<hr>';
        return;
    }
    
    $classeRelativa = substr($class, $len);
    
    $fullName = $prefix . $classeRelativa;
    
    $file = $baseDir. str_replace('\\', DIRECTORY_SEPARATOR , $fullName) . '.php';
    
    if(file_exists($file)){
        require_once $file;
    }
    
});