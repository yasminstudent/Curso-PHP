<?php
    require 'connection.php';

    $lista = [];
    $sql = $pdo->query("SELECT * FROM usuarios");
    if($sql->rowCount() > 0){ //verifica se tem usuários no banco
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>CRUD</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <a class="btn btn-primary mt-4 mb-4" href="adicionar.php" role="button">Adicionar Usuário</a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($lista as $usuario): ?>
                        <tr>
                            <th scope="row"><?=$usuario["id"];?></th>
                            <td><?=$usuario["nome"];?></td>
                            <td><?=$usuario["email"];?></td>
                            <td>
                                <a class="btn btn-warning" href="editar.php?id=<?=$usuario["id"];?>" role="button">Editar</a>
                                <a class="btn btn-danger" href="deletar.php?id=<?=$usuario["id"];?>" role="button">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </body>
</html>