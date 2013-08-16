<?php

class PlayView
{
    public function render (Game $game)
    {
        echo '<html><head></head><body>';

        echo '<h1>Hangman</h1>';
        echo '<p>Guess the mysterious word:</p>';
        $word = $game->getWordToGuess();
        for ($i = 0 ; $i < strlen($word) ; $i++) {
            $letter = $word[$i];
            if (in_array($letter, $game->getLettersGuessed())) {
                echo $letter . ' ';
            } else {
                echo '_ ';
            }
        }

        echo '<p>Wrong letters: </p>';
        foreach ($game->getLettersGuessed() as $guessedLetter) {
            if (false === strpos($word, $guessedLetter)) {
                echo $guessedLetter . ' ';
            }
        }

        echo '<p>Remaining attempts: ' . $game->getAttemptsRemaining() . '</p>';

        echo '<form>';
        echo '<p>Guess letter: <input name="letter" type="text" size="1" maxlength="1">';
        echo '<input type="submit" value="Guess"></p>';
        echo '</form>';

        echo '</body></html>';
    }
}