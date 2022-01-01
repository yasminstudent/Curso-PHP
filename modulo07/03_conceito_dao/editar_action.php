<?php
    require 'connection.php';
    require 'dao/UsuarioDaoMysql.php';

    $usuarioDao = new UsuarioDaoMysql($pdo);

    $id = filter_input(INPUT_POST, "id");
    $name = filter_input(INPUT_POST, "name");
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if($id AND $name AND $email){ //verifica se os campos estão preenchidos e validados

        //Verificando se não existe um usuário com o mesmo email
        if($usuarioDao->findByEmail($email, $id) === false){
            //Pegando o objeto do usuário e alterando os atributos
            //$usuario = $usuarioDao->findById($id);
            $usuario = new Usuario();
            $usuario->setId($id);
            $usuario->setNome($name);
            $usuario->setEmail($email);

            $usuarioDao->update($usuario);

            header("location: index.php");
            exit;
        }
        else{
            header("location: editar.php?id=".$id);
            exit;
        }
    }
    else{
        header("location: editar.php?id=".$id);
        exit;
    }
?>