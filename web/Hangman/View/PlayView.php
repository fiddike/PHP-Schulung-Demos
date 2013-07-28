<?php

class PlayView {
    public function render (array $viewParams) {
        $output = '<html><head></head><body>';
        $output = $output . 'Guess the mysterious word: ';

        $word = $viewParams['game']->getWord();

        // jetzt die noch nicht geratenen Buchstaben maskieren wie: H a _ _ o
        $output = $output .  $word;

        $output = $output . '</body></html>';

        return $output;
    }
}