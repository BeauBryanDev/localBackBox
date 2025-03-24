<?php

namespace App;

class Post 
{
    protected  $Comment = [];

    public function AddComment2Post( Comment $comment ) {

        $this->comments = $comment;
    }

}