<?php 

function carregarClasse($classe) {
    
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $classe);
            $file .= '.php';
          
            echo $file;
            
            if(file_exists($file)){
                 
                require_once $file;
            }
           
}

spl_autoload_register('carregarClasse');