<?php 

namespace App;

use OpenAI;

class OpenAiChat {

    private OpenAI $openai;
    protected $client;

    public function __construct() {
        $this->client = OpenAI::client($_ENV['OPEN_AI_API_KEY']);
    }

    public function getOpenAiChat(string $input) {

        $response = $this->client->chat()->create([

            'model' => 'gpt-4o-mini',
            'messages' => [
                [
                    'role' => 'user',
                    'content' => $input
                ]
            ]
        ]);
        return $response->choices[0]->message->content;
    }

}

