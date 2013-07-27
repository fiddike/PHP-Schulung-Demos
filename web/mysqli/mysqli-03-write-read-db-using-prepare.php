<?php
ini_set('display_errors', 'On');

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'php-schulung-demos';
$mysqli = new mysqli($server, $username, $password, $database);

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
        ")
) {
    echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

if (!($statement = $mysqli->prepare('INSERT INTO word (word) VALUES (?)'))) {
    echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

//i	corresponding variable has type integer
//d	corresponding variable has type double
//s	corresponding variable has type string
//b	corresponding variable is a blob and will be sent in packets

$words = array(
    'foo',
    'bar',
    'cat',
    'dog',
    'elephant',
    'cat',
);

foreach ($words as $word) {
    if (!$statement->bind_param("s", $word)) {
        echo "Binding parameters failed: (" . $statement->errno . ") " . $statement->error;
    }
    if (!$statement->execute()) {
        echo "Execute failed: (" . $statement->errno . ") " . $statement->error;
    }
}

$resultSet = $mysqli->query("SELECT * FROM word ORDER BY id ASC");

while ($row = $resultSet->fetch_assoc()) {
    echo " id = " . $row['id'] . " word = " . $row['word'] . '<br />';
}
