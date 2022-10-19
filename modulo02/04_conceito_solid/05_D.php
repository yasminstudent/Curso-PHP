<?php
    /*          SOLID: D - Princípio da Inversão da Dependência     */

    //Violando o princípio:
    class MySQLConnectionViolando {
        public function connect(){}
    }

    class UsuarioDAOViolando{
        private $db;

        public function __construct(){
            $this->db = new MySQLConnectionViolando(); 
            //nesse caso toda vez que o programador usar a classe UsuarioDAO
            //será gerado uma nova conexão / um novo objeto de conexão
            //e se precisasse mudar p/ Oracle, teria que mudar diretamente na classe UsuarioDAO
        }
    }

    //Seguindo o princípio:
    interface DBConnection {
        public function connect();
    }

    class MySQLConnection implements DBConnection {
        public function connect(){}
    }

    class OracleConnection implements DBConnection {
        public function connect(){}
    }

    class UsuarioDAO{
        private $db;

        public function __construct(DBConnection $dbCon){
            $this->db = $dbCon;
        }
    }

    //Já nesse caso podemos enviar qualquer umas das classes, a mudança não ocorrerá em UsuarioDAO
    $dbCon = new MySQLConnection();
    $dbCon = new OracleConnection();

    //e a conexão é a mesma
    $usuarioDao = new  UsuarioDAO($dbCon);
    $usuarioDao2 = new  UsuarioDAO($dbCon);
?>