<?php

require('Model/DictionaryInterface.php');
require('Model/Dictionary/DictionaryCsv.php');

class DictionaryTest extends PHPUnit_Framework_TestCase
{
    public function testRandomWordReturnsString()
    {
        $dictionary = new DictionaryCsv();
        $word = $dictionary->getRandomWord();
        $this->assertTrue(is_string($word));
    }

    public function testRandomWordExceedsMinimalLength()
    {
        $dictionary = new DictionaryCsv();
        $word = $dictionary->getRandomWord();
        $this->assertGreaterThan(3, strlen($word));
    }

    public function testRandomWordIsReallyRandom()
    {
        $dictionary = new DictionaryCsv();
        $words = array();
        for ($i = 0; $i < 10; $i++) {
            $words[] = $dictionary->getRandomWord();
        }
        $this->assertGreaterThan(3, count(array_unique($words)));
    }
}