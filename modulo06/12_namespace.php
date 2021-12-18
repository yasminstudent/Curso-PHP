<?php
     /* ----------------------- Entendendo Namespace (php >= 5.6) ----------------------- */
    
    require '12_para_aula1.php';
    require '12_para_aula2.php';

    /* 
        esses dois primeiros arquivos possuem uma classe com o mesmo nome
        então o que diferencia ambas é o namespace
    */

    require 'exemplo/matematica/basico.php';

    $a = new namespace1\MinhaClasse(); //aqui nós dizemos qual das duas classes queremos usar (passando o namespace)
    echo $a->testar();

    //$b = new exemplo\matematica\Basico(); //passa o namespace p/ n gerar erro, pois os arquivos estão em pastas diferentes

    //use exemplo\matematica\Basico as MatematicaBasica;
    use exemplo\matematica\Basico;
    $b = new Basico();
?>