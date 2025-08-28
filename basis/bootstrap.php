<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ );
$dotenv->load();

// use App\FakeChat;
// use App\OpenAiChat;

use App\OllamaChat;

var_dump($_ENV['MESSAGE']);


$ai_chat =  new OllamaChat();


return new App\CurrentChat($ai_chat);
