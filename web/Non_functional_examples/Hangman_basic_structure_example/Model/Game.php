<?php

class Game {

    /**
     * @var GameSession $session
     */
    private $session;

    /**
     * @param GameSession $session
     */
    public function setSession(GameSession $session)
    {
        $this->session = $session;
    }

    /**
     * @return GameSession
     */
    public function getSession()
    {
        return $this->session;
    }

    public function tryLetter ($letter) {
        // @todo Implement this
    }

    public function isOver () {
        // @todo Implement this

        return true;
    }

    public function isWordGuessed () {
        // @todo Implement this

        return true;
    }

    public function getWord () {
        return $this->session->getWord();
    }
}