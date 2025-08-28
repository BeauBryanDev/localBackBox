<?php 

namespace App;

use ArdaGnsrn\Ollama\Ollama;
use ArdaGnsrn\Ollama\Responses\StreamResponse;

class OllamaChat implements AiServiceInterface {

    private Ollama $ollama;
    protected $client;

    public function __construct() {
        $this->client = Ollama::client();
    }

    public function getResponse(string $input): string {

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

