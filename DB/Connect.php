<?php

$host     = 'localhost';
$dbName   = 'addinfo';
$user     = 'root';
$password = '';

$pdo = new PDO('mysql:host='.$host.';port=3306;dbname='.$dbName,$user,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES UTF8');
// return $pdo;
