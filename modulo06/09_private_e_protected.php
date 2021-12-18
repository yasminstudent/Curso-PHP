<?php
    /* ----------------------- Propriedade Private e Protected ----------------------- */

    Class Post{
        protected $id;
        private $likes = 0;

        protected function getId(){
            return $this->id;
        }
        protected function setId($id){
            $this->id = $id;
        }

        protected function getLikes(){
            return $this->likes;
        }
        protected function setLikes($likes){
            $this->likes = $likes;
        }

        protected function exemplo(){
            echo "eu serei sobrescrito";
        }
    }

    Class Foto extends Post{
        private $imageType = "PNG";

        public function __construct($id){
            $this->id = 900; //essa linha quando o atributo está privado não funciona
            //mas quando está como protegido, funciona normalmente
        }

        public function exibir(){
            echo "Foto: " . $this->getId()."<br>Likes: ".$this->getLikes();
        }

        //é possível sobrescrever um método:
        public function exemplo(){
            echo "<br> olaaaaa";
        }
    }

    $foto = new Foto(19);
    $foto->exibir();
    $foto->exemplo();
    
?>