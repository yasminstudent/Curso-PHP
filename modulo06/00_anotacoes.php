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




  ----------------------- Typed Properties (php 7.4) -----------------------
  https://alunos.b7web.com.br/curso/php/typed-properties-74

  Definir o tipo da variável p/ aceitar somente valores desse tipo
  Ex:
    public int $likes = 0;
    public array $comments = [];
    public string $author;


  ----------------------- Método Construtor -----------------------
  https://alunos.b7web.com.br/curso/php/metodo-construtor

  Esse método é executado sempre que um objeto é criado
  Sua sintaxe:
  public function __construct(){
    //código
  }

  Ele pode receber parâmetros
  Ex:
  public function __construct($qtLikes = 0){
    $this->likes = $qtLikes
  }

  $post1 = new Post(25)



  ----------------------- Entendendo Encapsulamento -----------------------
  https://alunos.b7web.com.br/curso/php/entendendo-encapsulamento

  Métodos getters e setters

  Sintaxe/Exemplo:
  public function setAuthor($author){
    $this->author = $author;
  }

  public function getAuthor(){
    return $this->author
  }

  $post1 = new Post()
  $post1->setAuthor('Yasmin');
  echo $post1->getAuthor();

  Usa-se esses métodos p/ fazer tratamentos com o parâmetro recebido, se necessário
  $post1->author = 'Yasmin'; //dessa forma não seria possível realizar o tratamento

  E então com o uso desses métodos é possível/viável deixar o atributo privado:
  private string $author;

  Exemplos de tratamentos:
  public function setAuthor($author){
    if(strlen($author) >= 3){
      $this->author = $author;
    }
  }

  public function getAuthor(){
    return $this->author ?? ''; //tratamento se não tiver nenhum autor
  }




  ----------------------- Método Estático -----------------------
  Métodos que podem ser usados sem a necessidade de instanciar a classe / criar o objeto

  class Matematica{
    public static string $nome = "Yasmin";
    public static function somar($x, $y){
      return $x + $y;
    }
  }

  echo Matematica::somar(10, 20); //exibe 30
  echo Matematica::$nome; //exibe Yasmin
*/
?>