<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';

$pdo = new PDO('sqlite:' . $databasePath);

echo 'conexão bem sucedida...';

$student = new Student(null, 'Jorge Lindo', new \DateTimeImmutable('1982-12-30'));

$sqlInsert = "insert into students (name, birth_date) values ('{$student->name()}',
 '{$student->birthDate()->format('Y-m-d')}');";

var_dump($pdo->exec($sqlInsert));

