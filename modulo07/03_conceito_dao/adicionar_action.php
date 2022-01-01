<?php
    require 'connection.php';
    require 'dao/UsuarioDaoMysql.php';

    $usuarioDao = new UsuarioDaoMysql($pdo);

    $name = filter_input(INPUT_POST, "name");
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if($name AND $email){ //verifica se os campos estão preenchidos e validados

        //Verificando se não existe um usuário com o mesmo email
        if($usuarioDao->findByEmail($email) === false){
            $novoUsuario = new Usuario();
            $novoUsuario->setNome($name);
            $novoUsuario->setEmail($email);

            $usuarioDao->create($novoUsuario);

            header("location: index.php");
            exit;
        }
        else{
            header("location: adicionar.php");
            exit;
        }
    }
    else{
        header("location: adicionar.php");
        exit;
    }
?>