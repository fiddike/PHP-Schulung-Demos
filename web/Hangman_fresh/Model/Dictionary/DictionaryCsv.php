<?php

class DictionaryCsv implements DictionaryInterface
{
    public function getRandomWord()
    {
        $dictionary = explode (PHP_EOL, file_get_contents('Data/dictionary.csv'));

        return $dictionary[rand(0, count($dictionary)-1)];
    }
}