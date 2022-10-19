<?php
    /* ----------------------- Composer ----------------------- 
                gerenciador de dependências do PHP

        Explicando:
            composer é um código que será instalado no sistema
            e esse código irá usar o seguinte site: https://packagist.org/explore/
            (que é um repositório de códigos PHP)
            p/ buscar a dependência desejada e adicionar no seu projeto
        
        P/ uso é necessário que o projeto tenha o seguinte arquivo: composer.json
        e seu conteúdo a princípio deve ser: 
        {
            "require": {
                
            }
        }

        Comandos:
        composer install -> 
                cria a pasta vendor e os arquivos iniciais e
                instala as dependências especificadas no arquivo composer.json
                obs: ao rodar esse comando, ele gera um arquivo de autoload também, na pasta vendor

        composer require monolog/monolog -> ex de instalação de uma dependência
    */

    //Testando a dependência monolog:

    require 'vendor/autoload.php';

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    // create a log channel
    $log = new Logger('name');
    $log->pushHandler(new StreamHandler('your.log', Logger::WARNING));

    // add records to the log
    $log->warning('Foo');
    $log->error('Bar');

    //use classes2\matematica\primeiroAno\Basica;

    $m = new classes2\matematica\primeiroAno\Basica();
    echo $m->testar();

    /*
        P/ configurar o autoload do vendor, para que ele importe classes que estarão em outras pastas (nesse exemplo no classes2)
        devemos colocar no arquivo composer.json
        embaixo do require, o seguinte:
        "autoload": {
            "psr-4": { "classes2\\": "classes2/"} 
        }

        Explicando: 
        "autoload": {
            "psr-4": { "namespace\\": "pasta_a_q_se_refere/"} 
        }

        E então, p/ gerar outro autoload, devemos rodar o comando:
        composer dump-autoload

        E pronto, conseguimos importar as dependênciais em vendor e as nossas próprias classes
    */
?>