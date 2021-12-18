<?php
    /* ----------------------- Entendendo Interface ----------------------- 
                É um guia de implementação de uma classe    */

    interface Produto {
        public function listarProdutos();
        public function adicionarProduto();
        public function removerProduto();
    }

    class MysqlController implements Produto{
        public function listarProdutos(){

        }
        public function adicionarProduto(){
            echo "Adicionando produto com o Mysql";
        }
        public function removerProduto(){

        }
    }

    class OracleController implements Produto{
        public function listarProdutos(){

        }
        public function adicionarProduto(){
            echo "Adicionando produto com o Oracle";
        }
        public function removerProduto(){

        }
    }

    class MongoDBController implements Produto{
        public function listarProdutos(){

        }
        public function removerProduto(){

        }
    }

    $exemplo = new MongoDBController();

    /*
        Um erro será gerado e ele informará que existe um método abstrato
        de nome adicionarProduto que não foi declarado na classe MongoDBController
    */

    $exemplo->adicionarProduto();
?>