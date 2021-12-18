<?php
    /* ----------------------- Typed Properties (php 7.4) -----------------------
            Definir o tipo da variável p/ aceitar somente valores desse tipo    */

    Class Post {
        public int $likes = 0;
        public array $comments = [];
        public string $author;
    }

    $post1 = new Post();
    $post1->likes = "teste"; //essa linha gera um erro pq o atributo likes é do tipo inteiro
?>