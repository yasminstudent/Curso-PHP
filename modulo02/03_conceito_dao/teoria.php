<?php
/*
    DAO
    Data Access Object

    Precisa de no mínimo duas classes

    1ª: CLASSE USUARIO
            - id
            - nome
            - email

            - getid
            - setid

            - getnome
            - setnome

            - getemail
            - setemail

    2ª: CLASSE USUARIODAO
            - comunicação com o banco
            - crud e outros com o auxílio da 1ª classe
            - ex: add(Usuario $usuario)
    
    FUNCIONAMENTO
    - cria o objeto do usuario a ser adicionado
    - manda o objeto para o intermediário (DAO)
    - o intermediário faz a comunicação com o banco
*/
?>