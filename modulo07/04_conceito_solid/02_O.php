<?php
    /*          SOLID: O - Princípio Aberto-Fechado
        Objetos devem estar abertos p/ extensão e fechados p/ modificação 

        extensão = adicionar métodos a uma classe / aumentar a funcionalidade dela
        modificação = modificar método de uma classe                                */

    //Violando o princípio:

    class Clt
    {
        public function calcularSalario(){}
    }

    class Estagio
    {
        public function bolsaAuxilio(){}
    }

    class FolhaPagamentoEmpresa
    {
        public function calcular($funcionario)
        {
            $salario = 0;

            //pelo fato dos nomes dos métodos serem diferentes, se faz necessário essa verificação
            if($funcionario instanceof Clt){
                $salario = $funcionario->calcularSalario();
            } elseif($funcionario instanceof Estagio){
                $salario = $funcionario->bolsaAuxilio();
            }

            //se dps do sistema ir p/ o ar, a empresa quisesse adicionar a contratação PJ, 
            //teria que modificar essa classe, adicionando um elseif

            return $salario;
        }
    }

    //Seguindo o princípio:
    interface Remuneravel
    {
        public function remuneracao();
    }

    class ContratoClt implements Remuneravel
    {
        public function remuneracao(){}
    }

    class ContratoEstagio implements Remuneravel
    {
        public function remuneracao(){}
    }

    class FolhaPagamento
    {
        public function calcular(Remuneravel $funcionario) //o $funcionário é uma classe que implementa Remuneravel
        {
           return $funcionario->remuneracao();

            //se dps do sistema ir p/ o ar, a empresa quisesse adicionar a contratação PJ, 
            //não seria necessário modificar essa classe/esse método, já que a classe ContratoPj
            //implementaria Remuneravel também
        }
    }

?>