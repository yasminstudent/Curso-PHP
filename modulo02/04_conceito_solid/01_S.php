<?php
    /* SOLID: S - Princípio da Responsabilidade Única 
        Uma classe deve ter somente uma responsabilidade    */

    class ViolandoPrincipio
    {
        //Responsabilidade 1: gerenciando objeto do usuário
        public function setNome(){}
        public function getNome(){}

        // ... outros getters e setters ...

        //Responsabilidade 2: manipulação do usuário no banco de dados
        public function create(){}
        public function update(){}
        public function read(){}
        public function delete(){}
        // ... outros ...

        // uma classe com + de 1 responsabilidade tende a ficar grande e confusa
        // além disso msm que o programador queira usar apenas 1 das responsabilidades, 
        // teria que importar a classe inteira, tornando o programa + pesado do que poderia ser 
    }

    //----- Para ficar de acordo com o princípio -----
    class Usuario
    {
        public function setNome(){}
        public function getNome(){}
        // ... outros getters e setters ...
    }

    class UsuarioDao
    {
        public function create(Usuario $u){}
        public function update(suario $u){}
        public function read(){}
        public function delete($id){}
        // ... outros ...
    }
?>