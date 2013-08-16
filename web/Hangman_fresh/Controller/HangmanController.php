<?php

class HangmanController
{
    public function playAction ()
    {
        $dictionary = new DictionaryCsv();
        // $dictionary = new DictionaryDb(new Db());

        $game = new Game($dictionary);
        if (!$game->getWordToGuess()) {
            $game->start();
        }

        if (!empty($_REQUEST['letter'])) {
            $game->tryLetter($_REQUEST['letter']);
        }

        if ($game->isWordGuessed() or (1 > $game->getAttemptsRemaining())) {

//            echo ' guessed: ' . $game->isWordGuessed();
//            echo ' attempts remaining: ' . (1 > $game->getAttemptsRemaining());

            $view = new GameOverView();
            $view->render($game);
        } else {
            $view = new PlayView();
            $view->render($game);
        }
    }
}