<?php
ini_set('display_errors', 'off');

session_start();

require('Controller/HangmanController.php');
require('Model/Db.php');
require('Model/DictionaryInterface.php');
require('Model/Dictionary/DictionaryCsv.php');
require('Model/Dictionary/DictionaryDb.php');
require('Model/Game.php');
require('View/PlayView.php');
require('View/GameOverView.php');

$controller = new HangmanController();

$controller->playAction();