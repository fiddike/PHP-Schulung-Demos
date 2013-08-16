<?php
require_once 'Controller/HangmanController.php';
require_once 'Model/Game.php';
require_once 'Model/GameManager.php';
require_once 'Model/GameSession.php';
require_once 'Model/WordList.php';
require_once 'View/PlayView.php';
require_once 'View/GameOverView.php';

// Routing:
// Anhand der URL wird an dieser Stelle ermittelt welche Controller Klasse und welche Action ausgeführt werden soll
// In diesem Beispiel spielen wir für den Moment in dedem Fall Hangman

$hangmanController = new HangmanController();

return $hangmanController->playAction();