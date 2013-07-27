<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'php-schulung-demos';
$mysqli = new mysqli($server,$username,$password,$database);

if ($mysqli->connect_error) {
    echo 'Error connecting to database: ' . $mysqli->connect_error;
    exit();
}

if (!$mysqli->query("DROP TABLE IF EXISTS word") ||
    !$mysqli->query("
        CREATE TABLE word (
        id MEDIUMINT NOT NULL AUTO_INCREMENT,
        word CHAR (20) NOT NULL,
        PRIMARY KEY (id)
        ) ENGINE=InnoDB;
        ") ||
    !$mysqli->query('INSERT INTO word (word) VALUES ("foo"), ("bar"), ("cat"), ("dog"), ("pig")')
    ) {
    echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

$resultSet = $mysqli->query("SELECT * FROM word ORDER BY id ASC");

while ($row = $resultSet->fetch_assoc()) {
    echo " id = " . $row['id'] . " word = " . $row['word'] . '<br />';
}
