<?php
    /* ----------------------- Entendendo Herança -----------------------
        Uma classe pode herdar propriedades e métodos de outra classe */
    
    //Ex:
    Class Post{
        private $id;
        private $likes;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getLikes(){
            return $this->likes;
        }
        public function setLikes($likes){
            $this->likes = $likes;
        }
    }

    Class Foto extends Post{
        private $imageType = "PNG";

        public function __construct($id){
            $this->setId($id);
        }

        public function getImageType(){
            return $this->imageType;
        }
        public function setImageType($imageType){
            $this->imageType = $imageType;
        }
    }

    class Texto extends Post{ //Exemplo só p/ mostrar que uma classe pode ser herdada por + de 1 classe
        private $qtdCaracteres = 0;

        public function getQtdCaracteres(){
            return $this->qtdCaracteres;
        }
        public function setQtdCaracteres($qtdCaracteres){
            $this->qtdCaracteres = $qtdCaracteres;
        }
    }
    

    $foto = new Foto(19);
    $foto->setLikes(12);
    echo "Foto: " . $foto->getId()."<br>Tipo: ".$foto->getImageType()."<br>Likes: ".$foto->getLikes();
?>