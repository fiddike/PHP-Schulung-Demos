<?php

class Game
{
    private $dictionary;

    public function __construct(DictionaryInterface $dictionary) {
        $this->dictionary = $dictionary;
    }

    public function start()
    {
        $_SESSION['word_to_guess'] = $this->dictionary->getRandomWord();
        $_SESSION['attempts_remaining'] = 11;
        $_SESSION['letters_guessed'] = array();
    }

    public function getAttemptsRemaining()
    {
        return $_SESSION['attempts_remaining'];
    }

    public function getWordToGuess ()
    {
        if (isset($_SESSION['word_to_guess'])) {
            return $_SESSION['word_to_guess'];
        } else {
            return null;
        }
    }

    public function getLettersGuessed ()
    {
        return $_SESSION['letters_guessed'];
    }

    public function tryLetter ($letter) {
        if (!in_array($letter, $_SESSION['letters_guessed'])) {
            $_SESSION['letters_guessed'][] = $letter;
        }

        if (false === strpos($_SESSION['word_to_guess'], $letter)) {
            $_SESSION['attempts_remaining'] = $_SESSION['attempts_remaining'] -1;
        }
    }

    public function isWordGuessed () {
        foreach (str_split($this->getWordToGuess()) as $letter) {
            if (!in_array($letter, $this->getLettersGuessed())) {
                return false;
            }
        }

        return true;
    }
}