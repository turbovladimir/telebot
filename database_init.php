<?php
require_once 'bootstrap.php';
$dsn = "mysql:dbname={$mysql_credentials['database']};host={$mysql_credentials['host']}";

try {
    $c = new PDO($dsn, $mysql_credentials['user'], $mysql_credentials['password']);
    $c->exec(file_get_contents('/migrations/structure.sql'));
} catch (\Throwable $exception) {
    echo $exception->getMessage();
}
