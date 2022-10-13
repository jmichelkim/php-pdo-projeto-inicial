<?php

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';

$pdo = new PDO('sqlite:' . $databasePath);

echo 'conexão bem sucedida no arquivo lista-alunos...';
echo PHP_EOL;

$statement = $pdo->query('select * from students');

$studentList = $statement->fetchAll();

echo 'O cara mais lindo do mundo é ' . $studentList[0]['name'] . '.';

//var_dump($statement->fetchAll());