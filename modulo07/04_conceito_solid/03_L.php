<?php
    /*          SOLID: L - Princípio da Substituição de Liskov

    Quando uma função ou classe usa um determinado objeto (Ex: A)
    Qualquer classe que extenda a classe A deve servir p/ essa função/classe também   */
    
    class A
    {
        public function getNome()
        {
            return "Yasmin";
        }
    }

    class B extends A
    {
        public function getNome()
        {
            //return 19; //ao mudar o objetivo do método, o princípio é violado
            return "Ingrid";
        }
    }

    function imprimeNome(A $obj){ //essa é a função que usa o objeto A
        return $obj->getNome();
    }

    $objeto1 = new A();
    echo imprimeNome($objeto1) . "<br>";

    //Note que podemos passar o objeto B sem comprometer o funcionamento da função
    $objeto2 = new B();
    echo imprimeNome($objeto2) . "<br>";
?>