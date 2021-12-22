<?php
    /* ----------------------- Entendendo Autoload ----------------------- 
        Criação de um procedimento que irá importar as classes usadas  */
    
    spl_autoload_register(function($class){ //recebe o nome da classe
        if(file_exists('classes/'.$class.'.php')){ //verifica se o arquivo existe
            require 'classes/'.$class.'.php';
        }
    }); //Obs: p/ maior organização, colocar esse código em outro arquivo e importa-lo dps

    //toda vez que uma classe que não está no arquivo for instanciada, a função acima será acionada
    $m = new Matematica(); 
    echo $m->somar(10, 20);
?>