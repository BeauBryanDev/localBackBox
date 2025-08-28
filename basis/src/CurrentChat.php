<?php

namespace App;

class CurrentChat {

    private AiServiceInterface $chat;

    public function __construct(AiServiceInterface $chat) {
        $this->chat = $chat;
    }

    public function startChat() {
        //return $this->chat;

        $this->AiWellcome();


        while ( true )  {

            $input = readline('You > ');

            if ( trim($input) === 'exit' || trim($input) === 'quit' ) {
                echo "Goodbye!" . PHP_EOL;
                break;
            }

            $response = $this->getChatResponse($input);
            echo $response . PHP_EOL;

        }

    }

    private function AiWellcome() {

        echo "Hello. Ask me anything." . PHP_EOL;
        echo "Write [ exit//quit ] to leave chat :)\n";
    }

    public function getChatResponse( string $input): string {

        return $this->chat->getResponse($input);

    }   

}
