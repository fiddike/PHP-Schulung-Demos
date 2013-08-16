<?php

class DictionaryDb implements DictionaryInterface
{
    private $db;

    public function __construct (Db $db)
    {
        $this->db = $db;
    }

    public function getRandomWord()
    {
        $resultSet = $this->db->mysqli->query('SELECT * FROM word ORDER BY RAND() LIMIT 1');
        $row = $resultSet->fetch_assoc();

        return $row['word'];
    }
}