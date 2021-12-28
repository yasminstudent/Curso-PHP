<?php
    require 'connection.php';

    $name = filter_input(INPUT_POST, "name");
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if($name AND $email){ //verifica se os campos estão preenchidos e validados

        //Verificando se já existe um usuário com o mesmo email
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();

        if($sql->rowCount() == 0){
            $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:name, :email)");
            $sql->bindValue(":name", $name); //bindValue: associa o :name ao valor da variável $name
            $sql->bindParam(":email", $email); //bindParam: associa o :email a variável $email
            //$email = "teste@gmail"; //portanto ao mudar o valor da variável, o valor na query será mudado também
            //OBS: esses métodos fazem validações para evitar invasões

            $sql->execute(); //executa a query
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