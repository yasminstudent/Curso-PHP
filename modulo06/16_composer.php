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
?>