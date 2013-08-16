<?php

switch ($_SERVER['REQUEST_URI']) {
    case 'hello/world';
        require('Controller/HelloWorldController.php');
        $controller = new HelloWorldController();
        $controller->helloWoldAction();
        break;

    case 'hello/user';
        require('Controller/HelloUserController.php');
        $controller = new HelloUserController();
        $controller->helloUserAction();
        break;

    default;
        echo 'Fehler! Unbekannte URL.';
}
