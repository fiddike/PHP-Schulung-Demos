<?php


class GameOverView
{
    public function render (Game $game)
    {
        echo '<html><head></head><body>';

        echo '<h1>Hangman</h1>';

        if ($game->isWordGuessed()) {
            echo '<p>You won!</p>';
        } else {
            echo '<p>You lost!</p>';
        }

        echo '<p>The word was: ' . $game->getWordToGuess() .'</p>';
        echo '<p>To start a new game, use your developer tools and delete the session cookie.';

        echo '</body></html>';
    }
}