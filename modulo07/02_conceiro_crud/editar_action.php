<?php
    require 'connection.php';

    $id = filter_input(INPUT_POST, "id");
    $name = filter_input(INPUT_POST, "name");
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if($id AND $name AND $email){ //verifica se os campos estão preenchidos e validados
        $sql = $pdo->prepare("UPDATE usuarios SET nome = :name, email = :email WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->bindValue(":name", $name);
        $sql->bindValue(":email", $email);
        $sql->execute();

        header("location: index.php");
        exit;
    }
    else{
        header("location: adicionar.php");
        exit;
    }
?>