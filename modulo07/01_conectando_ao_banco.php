<?php

$pdo = new PDO("mysql:dbname=laravel;host=127.0.0.1", "root", "bcd127");
$sql = $pdo->query('SELECT * FROM users');

// fetchAll -> busca tudo
// PDO::FETCH_ASSOC -> faz ele associar os dados com as colunas
$dados = $sql->fetchAll( PDO::FETCH_ASSOC);

echo "TOTAL: " . $sql->rowCount() . "<br>";

echo "<pre>";
print_r($dados);
?>