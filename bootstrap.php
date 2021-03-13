<?php
// Load composer
use Symfony\Component\Dotenv\Dotenv;

require __DIR__ . '/vendor/autoload.php';
(new Dotenv())->load(__DIR__.'/.env');

$mysql_credentials = [
    'host'     => $_ENV['MYSQL_HOST'],
    'port'     => 3306,
    'user'     => $_ENV['MYSQL_USER'],
    'password' => $_ENV['MYSQL_PASSWORD'],
    'database' => $_ENV['MYSQL_DATABASE'],
];