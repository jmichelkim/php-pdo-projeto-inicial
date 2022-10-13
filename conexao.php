<?php

$databasePath = __DIR__ . '/banco.sqlite';

$pdo = new PDO('sqlite:' . $databasePath);

echo 'Conexão bem sucedida...';

$pdo->exec('create table students (id integer primary key, name text, birth_date text);');

echo 'Banco students criado com sucesso...';