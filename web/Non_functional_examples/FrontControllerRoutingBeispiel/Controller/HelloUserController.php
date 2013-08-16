<?php

class HelloUserController
{
    public function helloUserAction () {
        $username = $_GET['username'];

        require ('ModelMysqlDb');
        $db = new ModelMysqlDb();
        $user = $db->loadUser($username);

        if (empty($user)) {
            require ('../View/Error404.php');
            $view = new Error404();
            $view->render($username);
        } else {
            require('../View/HelloUserView.php');
            $view = new HelloUserView();
            $view->render($user);

        }
    }
}