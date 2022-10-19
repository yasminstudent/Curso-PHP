<?php
    /* ----------------------- Definindo Classes e Objetos -----------------------
            Classe -> Idéia/modelo de algo
            Objeto -> Pega as propriedades da classe e cria algo        */

    //Ex de classe:
    Class Post {
        public $likes = 0;
        public $comments = [];
        public $author;
    }

    //Ex de objeto:
    $post1 = new Post();
    $post1->likes = 19;
    echo $post1->likes;
?>