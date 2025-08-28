<?php 

namespace App;

use OpenAI;

class OpenAiChat implements AiServiceInterface {

    private OpenAI $openai;
    protected $client;

    public function __construct() {
        $this->client = OpenAI::client($_ENV['OPEN_AI_API_KEY'] );
    }

    public function getResponse(string $input): string {

        $response = $this->client->chat()->create([

            'model' => 'gpt-4o-mini',
            'messages' => [
                [   [
                    'role' => 'system',
                    'content' => <<<EOT
                     You are a helpful Computer Sciences assistant, You only provide information related to computer science and software development.
                     If someone ask you something outside of this domain, politely decline to answer and says "I am sorry I cannot help you".
                     Answer the question to the best of your ability, straightforward.
                    EOT
                ],
                    'role' => 'user',
                    'content' => $input
                ]
            ]
        ]);
        return $response->choices[0]->message->content;
    }

}

