<?php 

namespace App\Http;

class Response {

    protected $view ;
    //protected $layout = 'default';


    public function __construct($view)  {

        $this->view = $view;

        //$this->layout = $layout;
    }

    public function getView()  {

        return $this->view;
    }

    // public function getLayout() {

    //     return $this->layout;

    // }

    public function send()   {

        $view = $this->getView();

        $content = file_get_contents( viewPath($view) );


        require viewPath('layout');
    }
    
}