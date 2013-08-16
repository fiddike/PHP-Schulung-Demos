<?php

class Db
{
    public $mysqli;

    public function __construct ()
    {
        require 'Config/config.php';
        $this->mysqli = new mysqli($config['dbhost'], $config['dbuser'], $config['dbpassword'], $config['db']);

        if ($this->mysqli->connect_error) {
            throw new Exception ('Error connecting to database. This is the internal error message: ' . $this->mysqli->connect_error);
        }
    }
}