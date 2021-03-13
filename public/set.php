<?php
require_once __DIR__.'/../bootstrap.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($_ENV['BOT_API_KEY'], $_ENV['BOT_USERNAME']);

    // Set webhook
    $result = $telegram->setWebhook($_ENV['HOOK_URL']);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
     echo $e->getMessage();
}