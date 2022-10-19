<?php
    /* ----------------------- Entendendo PSR ----------------------- 
        PHP Standards Recommendations -> Recomendações de padrão de PHP

        site p/ consulta: https://www.php-fig.org/psr/

        aulas: 
        https://alunos.b7web.com.br/curso/php/o-que-e-psr
        https://alunos.b7web.com.br/curso/php/entendendo-a-psr-1-1
        https://alunos.b7web.com.br/curso/php/entendendo-a-psr-1-2

        PSR 1:
        * Os arquivos DEVEM usar apenas tags <?php e <?=
        * Os arquivos DEVEM usar apenas UTF-8 sem BOM para código PHP
        * Os arquivos devem quer símbolos declare (classes, funções, constantes, etc.) 
          ou provocar efeitos secundários (por exemplo, gerar a saída, configurações ini mudança, etc.), 
          mas não deve fazer as duas coisas.
        * Os nomes das classes DEVEM ser declarados em StudlyCaps
        * As constantes de classe DEVEM ser declaradas em maiúsculas com separadores de sublinhado.
        * Os nomes dos métodos DEVEM ser declarados em camelCase
        * Em uma classe as variáveis devem ser declaradas com somente 1 dos 3 padrões.
            Recomendação do professor: camelCase


        PSR 4:
        * Toda classe deve ter um namespace
        * Um namespace deve seguir um padrão/ser compátivel com os diretórios
          Ex: 
            caminho do arquivo com a classe: classes/matematica/primeiroAno/Basica.php
            namespace da classe Basica: matematica\primeiroAno 
            (nesse caso consideramos o diretório classes como base de todas as classes, 
            então não se faz necessário colocar no namespace)

            e o autoload poderia ficar assim:
    */
    spl_autoload_register(function($class){
      $baseDir = __DIR__.'/classes/'; //__DIR__ retorna os diretórios onde o arquivo está

      //$class seria igual a matematica\primeiroAno\Basica

      $file = $baseDir . str_replace('\\', '/', $class).'.php';

      if(file_exists($file)){
        require $file;
      }
    });

    //e o uso da classe ficaria assim:
    // $exemplo = new matematica\primeiroAno\Basica()
?>