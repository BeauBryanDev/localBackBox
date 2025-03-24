<?php

use PHPunit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase 
{
    public function test_email() {

        $myEmail = Validate::email('myemail13@gmail.com');
        $this->assertTrue($myEmail);
    }
    
}