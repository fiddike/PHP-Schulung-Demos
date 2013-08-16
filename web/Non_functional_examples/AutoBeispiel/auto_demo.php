<?php
require_once("Auto.php");
require_once("AutoXmlParser.php");

$xml = 'aefafd';

$auto = new Auto();

$autoXmlParser = new AutoXmlParser();

$auto = $autoXmlParser->xmlToAuo($xml);

$auto->leistung = 123;

//$auto->sitze = 34;

$auto->setSitze(22);

echo $auto->beschreibung();