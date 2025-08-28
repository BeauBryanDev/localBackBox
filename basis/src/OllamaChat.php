<?php 

namespace App;

use ArdaGnsrn\Ollama\Ollama;

class OllamaChat { 

    private Ollama $ollama;
    protected $client;

    public function __construct() {
        $this->client = Ollama::client();
    }

    public function getOllamaChat(string $input) {

        $response = $this->client->chat()->create([

            'model' => 'deepseek-r1:1.5b',
            'messages' => [
                [
                    'system' => [
                        'content' => 'You are an expert Software Engineer.'
                    ],
                    'role' => 'user',
                    'content' => $input
                ]
            ]
        ]);
        return $response->message->content;
    }

}

