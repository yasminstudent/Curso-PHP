<?php
//como será importado na pág index, o caminho fica assim
require_once 'models/Usuario.php'; 

class UsuarioDaoMysql implements UsuarioDAO
{
    private $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }

    public function create(Usuario $usuario)
    {
        $sql = $this->pdo->prepare("INSERT INTO usuarios (nome , email) VALUES (:nome, :email)");
        $sql->bindValue(':nome', $usuario->getNome());
        $sql->bindValue(':email', $usuario->getEmail());
        $sql->execute();

        $usuario->setId($this->pdo->lastInsertId());
        return $usuario;
    }

    public function findAll()
    {
        $data= [];

        $sql = $this->pdo->query("SELECT * FROM usuarios");

        if($sql->rowCount() > 0){
            $list = $sql->fetchAll();

            //criando um objeto Usuario e adicionando no array
            foreach ($list as $item){
                $user = new Usuario();
                $user->setId($item['id']);
                $user->setNome($item['nome']);
                $user->setEmail($item['email']);

                $data[] = $user;
            }
        }

        return $data;
    }

    public function findByEmail($email, $id=0)
    {
        if($id > 0){ //para verificação no editar do usuário
            $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND id != :id");
            $sql->bindValue(':id', $id);
        }
        else{
            $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        }
           
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch();

            $user = new Usuario();
            $user->setId($data['id']);
            $user->setNome($data['nome']);
            $user->setEmail($data['email']);

            return $user;
        }
        else{
            return false;
        }
    }

    public function findById($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch();

            $user = new Usuario();
            $user->setId($data['id']);
            $user->setNome($data['nome']);
            $user->setEmail($data['email']);

            return $user;
        }
        else{
            return false;
        }
    }

    public function update(Usuario $usuario)
    {
        $sql = $this->pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id");
        $sql->bindValue(':nome', $usuario->getNome());
        $sql->bindValue(':email', $usuario->getEmail());
        $sql->bindValue(':id', $usuario->getId());
        $sql->execute();

        return true;
    }

    public function delete($id)
    {
        $sql = $this->pdo->prepare("DELETE FROM usuarios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
}
?>