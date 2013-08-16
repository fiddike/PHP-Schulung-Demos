<?php

class GameOverView {
    public function render (array $viewParams) {
        $output = '<html><head></head><body>';

        // @todo Fallunterscheidung gewonnen oder verloren auf Basis von $viewParams['game']->isWordGuessed();

        $output = $output . 'The word was: ' . $viewParams['game']->getWord();

        $output = $output . '</body></html>';

        return $output;
    }
}