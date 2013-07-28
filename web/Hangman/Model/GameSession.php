<?php

class GameSession
{
    private $word;

    /**
     * @param string $word
     */
    public function setWord($word)
    {
        $this->word = $word;
    }

    /**
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }

    public function load () {
        // @todo Implement this

        return true;
    }
}