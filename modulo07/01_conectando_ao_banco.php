<?php

$pdo = new PDO("mysql:dbname=cursophp;host=127.0.0.1", "root", "bcd127");
$sql = $pdo->query('SELECT * FROM usuarios');

// fetchAll -> retorna todos os itens
// fetch -> retorna o primeiro item
// PDO::FETCH_ASSOC -> faz ele associar os dados com as colunas da tabela no banco
$dados = $sql->fetchAll( PDO::FETCH_ASSOC);

echo "TOTAL: " . $sql->rowCount() . "<br>";

echo "<pre>";
print_r($dados);
?>