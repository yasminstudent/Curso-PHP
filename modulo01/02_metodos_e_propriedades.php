<?php
    /* ----------------------- Definindo Métodos e Propriedades -----------------------
            Propriedades -> características por assim dizer
            Métodos -> ações        */

    /* Fonte: https://www.geeksforgeeks.org/what-is-the-difference-between-public-private-and-protected-in-php/
    Modificador de acesso público: este modificador está aberto para uso dentro e fora da classe. 
    Modificador de acesso protegido: este modificador está aberto para uso na classe em que está definido e em suas classes pai ou herdadas.
    Modificador de acesso privado: este modificador está aberto para uso apenas na classe em que está definido. */

    Class Post {
        //Ex de propriedades:
        public $likes = 0;
        protected $comments = [];
        private $author;

        //Ex de método:
        public function aumentaLike(){
            $this->likes++;
        }
    }

    $post1 = new Post();
    $post1->aumentaLike(); //likes do post1 passa a valer 1
    echo $post1->likes;
?>