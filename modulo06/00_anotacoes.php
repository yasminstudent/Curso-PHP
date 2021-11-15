<?php
/*
  ----------------------- Definindo Classes e Objetos -----------------------
  https://alunos.b7web.com.br/curso/php/definindo-classes-e-objetos
  
  Classe -> Idéia/modelo de algo
  Objeto -> Pega as propriedades da classe e cria algo

  Ex de classe:
  Class Post {
    public $likes = 0;
    public $comments = [];
    public $author;
  }

  Ex de objeto:
  $post1 = new Post()
  $post1->likes = 19;


  ----------------------- Definindo Métodos e Propriedades -----------------------
  https://alunos.b7web.com.br/curso/php/definindo-metodos-e-propriedades

  Propriedades (características por assim dizer):
  Class Post {
    private $likes = 0;
    protected $comments = [];
    public $author;
  }

  Modificador de acesso público: este modificador está aberto para uso dentro e fora da classe. 
  Modificador de acesso protegido: este modificador está aberto para uso na classe em que está definido e em suas classes pai ou herdadas.
  Modificador de acesso privado: este modificador está aberto para uso apenas na classe em que está definido. 
  Fonte: https://www.geeksforgeeks.org/what-is-the-difference-between-public-private-and-protected-in-php/

  Métodos (ações):
  Class Post {
    public $likes = 0;
    public $comments = [];
    public $author;

    public function aumentaLike(){
      $this->likes++;
    }
  }

  $post1 = new Post()
  $post1->aumentaLike(); //likes do post1 passa a valer 1
*/
?>