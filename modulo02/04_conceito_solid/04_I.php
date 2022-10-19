<?php
    /*          SOLID: I - Princípio da Segregação da Interface
        Uma inteface deve possuir apenas os métodos essenciais 
        que serão utilizados pela classe que estiver implementando eles    */

    interface AvesErrada
    {
        public function setLocation($lat, $lng);
        public function setAltitude($alt);
        public function render();
    }
    
    class PapagaioErrado implements AvesErrada
    {
        public function setLocation($lat, $lng){}
        public function setAltitude($alt){}
        public function render(){}
    }

    class PinguimErrado implements AvesErrada
    {
        public function setLocation($lat, $lng){}
        //estamos violando o princípio pois esse método não será usado, já que pinguim não voa
        public function setAltitude($alt){ return 0;}
        public function render(){}
    }

    //Seguindo o princípio:
    interface Aves
    {
        public function setLocation($lat, $lng);
        public function render();
    }

    interface AvesQueVoam extends Aves
    {
        public function setAltitude($alt);
    }
    
    class Papagaio implements AvesQueVoam
    {
        public function setLocation($lat, $lng){}
        public function setAltitude($alt){}
        public function render(){}
    }

    class Pinguim implements Aves
    {
        public function setLocation($lat, $lng){}
        public function render(){}
    }

    //Obs: se alguma função precisar receber uma classe que implemente Aves, 
    //ela poderá receber tanto Pinguim, quanto Papagaio
?>