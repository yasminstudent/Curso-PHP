<?php
    $date = new DateTime('2022-01-08 17:24:00');
    $date = new DateTime(); //pega a hora e data atual
    $date->setTimezone( new DateTimeZone('America/Sao_Paulo') ); //seta a região p/ pegar a hora e data
    
    //Adiciona anos, meses, dias, horas, minutos e/ou segundos
    $date->add( DateInterval::createFromDateString('7 years 2 days 5 minutes') );

    //Subtrai anos, meses, dias, horas, minutos e/ou segundos
    $date->sub( DateInterval::createFromDateString('7 years 2 days 5 minutes') );

    echo $date->format('d/m/Y H:i:s')."<br><br>";

    //Comparações
    $date1 = new DateTime('2022-01-08');
    $date2 = new DateTime('2022-02-08');

    if($date1 < $date2){
        echo "A data1: ".$date1->format('d/m/Y')." vem antes da data2: ".$date2->format('d/m/Y');
    } else if ($date1 == $date2){
        echo "São iguais";
    }
    else{
        echo "A data2: ".$date2->format('d/m/Y')." vem antes da data1: ".$date1->format('d/m/Y');
    }

    echo "<br><br>";

    //Diferença em dias
    $diff = $date->diff(new DateTime('2022-12-31 00:00:00'));
    echo $diff->format('Faltam %y anos, %m meses, %d dias, %h horas, %i minutos e %s segundos para o fim do ano')
    /*
        %a -> quantidade de dias no total
    */
?>