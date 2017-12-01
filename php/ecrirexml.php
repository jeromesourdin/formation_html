<?php

$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><document></document>');

$xml->addAttribute("version","1.0");

//echo $xml->asXML();

$person = $xml->addChild("person");
$person->addAttribute("id","1");
$person->addChild("nom","Sourdin");
$person->addChild("prenom","Jérôme");

$person = $xml->addChild("person");
$person->addAttribute("id","2");
$person->addChild("nom","Barré");
$person->addChild("prenom","Emmanuelle");

echo $xml->asXML();

$dom = new DOMDocument("1.0");
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml->asXML());
$dom->save("ressources/export2.xml");
