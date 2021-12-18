<?php
    /* ----------------------- Método Estático -----------------------
    Métodos ou propriedades que podem ser usados sem a necessidade de instanciar a classe / criar o objeto  */
    
    class Matematica{
        public static string $nome = "Yasmin";
        public static function somar($x, $y){
            return $x + $y;
        }
    }
    
    echo Matematica::somar(10, 20) . "<br>"; //exibe 30
    echo Matematica::$nome; //exibe Yasmin
?>