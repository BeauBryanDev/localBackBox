<?php

use PHPUnit\Framework\TestCase ; 

use App\Post;
use App\Comment;


class PostTest extends TestCase
{
    public function test_AddComment2Post()  {

        $post = new Post() ;
        $comment = new Comment();

        $post->addComment($comment);

        $this->assertEquals(1, $post->countComments());
        $this->assertInstanceOf( Comment::class, $post->getComments()[0]);
        
    
    }
}

?>

