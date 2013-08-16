<?php

class HelloWorldController
{
    public function helloWoldAction () {

        // bei Bedarf hier Model Klassen verwenden

        require('../View/HelloWorldView.php');
        $view = new HelloWorldView();
        $view->render();
    }
}