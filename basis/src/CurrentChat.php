<?php

namespace App;

class CurrentChat {

    private AiServiceInterface $chat;

    public function __construct(AiServiceInterface $chat) {
        $this->chat = $chat;
    }

    public function startChat() {
        //return $this->chat;

        echo "Ask me anything." . PHP_EOL;


        while ( true )  {

            $input = readline('> ');

            if ( $input === 'exit' || $input === 'quit' ) {
                echo "Goodbye!" . PHP_EOL;
                break;
            }

            $response = $this->chat->getResponse($input);
            echo $response . PHP_EOL;

        }

    }

}
