<?php

class HelloUserView
{
    public function render ($user)
    {
        echo '<html><header></header><body>';
        echo 'Hello ' .
            $user->getUserFirstName() . ' ' .
            $user->getUserLastName() . '
            How are you?';
        echo '</body></html>';
    }
}