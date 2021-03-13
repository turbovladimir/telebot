<?php
require_once 'bootstrap.php';
$dsn = "mysql:dbname={$mysql_credentials['database']};host={$mysql_credentials['host']}";
$c = new PDO($dsn, $mysql_credentials['user'], $mysql_credentials['password']);
$c->exec('create database if not exists telebot CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;');
$c->exec(file_get_contents(__DIR__ . '/../migrations/structure.sql'));