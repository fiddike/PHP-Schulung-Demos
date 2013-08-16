<?php
class HangmanController {
    public function playAction() {
        $gameSession = new GameSession();
        $manager = new GameManager();
        $game = $manager->loadGameOrStartNew($gameSession);

        if (isset($_REQUEST['tryLetter'])) {
            $game->tryLetter($_REQUEST['tryLetter']);
            $manager->save($game);
        }

        if ($game->isOver()) {
            $view = new GameOverView();
            $viewParams['game'] = $game;
        } else {
            $view = new PlayView();
            $viewParams['game'] = $game;
        }

        return $view->render($viewParams);
    }
}