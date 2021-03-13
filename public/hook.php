<?php
require_once __DIR__.'/../bootstrap.php';

try {
    $telegram = new Longman\TelegramBot\Telegram($_ENV['BOT_API_KEY'], $_ENV['BOT_USERNAME']);
    $telegram->enableMySql($mysql_credentials);
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e->getMessage();
}