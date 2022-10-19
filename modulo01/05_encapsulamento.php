<?php
    /* ----------------------- Entendendo Encapsulamento -----------------------
                            Métodos getters e setters                        */
    Class Post{
        private $likes = 0;
        private $comments = [];
        private $author = "Desconhecido";

        public function getAuthor(){
            return $this->author;
        }

        public function setAuthor($author){
            /*
                Com o uso desses métodos é possível fazer tratamentos com o parâmetro recebido
                se necessário, como por exemplo:
            */
            if(strlen($author) >= 3){
                $this->author = $author;
            }
            /*
                $post1->author = 'A'; //dessa forma não seria possível realizar o tratamento
                então, ao usar esses métodos, é viável deixar os atributos privados
            */
        }
    }
?>