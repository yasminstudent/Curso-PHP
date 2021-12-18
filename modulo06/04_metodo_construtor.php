<?php
    /* ----------------------- Método Construtor -----------------------
            Esse método é executado sempre que um objeto é criado    */
    
    Class Saudacoes{
        //Sintaxe:
        public function __construct(){
            echo "Olá<br>";
        }
    }

    Class Estudante{
        //Pode receber parâmetros
        public function __construct($nome){
            echo "Seja Bem Vinda(o) ${nome} <br>";
        }
    }

    $inicio =  new Saudacoes();
    $fim = new Estudante("Yasmin");
?>