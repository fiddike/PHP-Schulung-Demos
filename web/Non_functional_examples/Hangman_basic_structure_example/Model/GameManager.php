<?php

class GameManager
{
    public function loadGameOrStartNew (GameSession $gameSession)
    {
        $game = new Game();

        if ($gameSession->load()) {
            $game->setSession ($gameSession);
        } else {
            $wordlist = new WordList();
            $word = $wordlist->getRandomWord();
            $gameSession->setWord ($word);
        }

        return $game;
    }

    public function save($game) {
        // @todo Implement this
    }
}