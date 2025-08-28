<?php 

namespace App;

class FakeChat implements AiServiceInterface {
    public function getResponse(string $input): string {

        sleep(1);
        if (strpos($input, 'hi') !== false || strpos($input, 'hello') !== false || strpos($input, 'hola') !== false) {
            echo "Thinking... " . PHP_EOL;
            return 'AI: Hello! How can I assist you today?';
        } else {
            return 'AI: I am sorry I didn\'t understand that!\nTry again!\n';

        }

    }

}