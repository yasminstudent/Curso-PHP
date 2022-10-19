<?php
    /* ----------------------- Injeção de Dependências ----------------------- 
    Quando se insere uma classe dentro de outra (normalmente pelo método construtor) */

    interface DatabaseInterface {
        public function listar();
    }

    class Database {
        private $engine;

        public function __construct(DatabaseInterface $engine){
            $this->engine = $engine;
        }

        public function listarTudo(){
            echo $this->engine->listar();
        }
    }

    class MysqlEngine implements DatabaseInterface
    {
        public function listar(){
            return "Listando com Mysql";
        }
    }

    class OracleEngine implements DatabaseInterface
    {
        public function listar(){
            return "Listando com Oracle";
        }
    }
    
    $db = new Database(new OracleEngine); //a injeção está ocorrendo aqui
    $db->listarTudo();
?>