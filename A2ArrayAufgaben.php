<?php
$aufgaben = array(
	0 => array(
		'Aufgabenbezeichnung' => 'HTML Datei erstellen',
		'Beschreibung der Aufgabe' => 'HTML Datei erstellen',
		'Reiter' => 'ToDo',
		'Zuständig' => 'Max Mustermann'
	),
	1 => array(
		'Aufgabenbezeichnung' => 'CSS Datei erstellen',
		'Beschreibung der Aufgabe' => 'CSS Datei erstellen',
		'Reiter' => 'ToDo',
		'Zuständig' => 'Max Mustermann'
	),
	3 => array(
		'Aufgabenbezeichnung' => 'PC eingeschaltet',
		'Beschreibung der Aufgabe' => 'PC einschalten',
		'Reiter' => 'Erledigt',
		'Zuständig' => 'Petra Müller',
	),
	4 => array(
		'Aufgabenbezeichnung' => 'Kaffee trinken',
		'Beschreibung der Aufgabe' => 'Kaffee trinken',
		'Reiter' => 'Erledigt',
		'Zuständig' => 'Petra Müller'
	),
	5 => array(
		'Aufgabenbezeichnung' => 'Für die Uni lernen',
		'Beschreibung der Aufgabe' => 'Für die Uni lernen.',
		'Reiter' => 'Verschoben',
		'Zuständig' => 'Max Mustermann',
	),

);


echo '<pre>';
var_dump($aufgaben);
echo '</pre>';

echo '<hr>';
//A2 Teil b
foreach($aufgaben as $Projekt){
	if(isset($Projekt['Aufgabenbezeichnung'],$Projekt['Beschreibung der Aufgabe'],$Projekt['Reiter'],$Projekt['Zuständig'])){
		echo ('Array ist vollständig'.'<br>');
	}else{
		echo ('Array ist nicht vollständig'.'<br>');
	}
}

/*
echo '<hr>';
foreach($aufgaben as $aufgabe){
    echo('Aufgabenbezeichnung: '.$aufgabe['Aufgabenbezeichnung'].'<br>');
    echo('Beschreibung der Aufgabe: '.$aufgabe['Beschreibung der Aufgabe'].'<br>');
    echo('Reiter: '.$aufgabe['Reiter'].'<br>');
    echo('Zuständig: '.$aufgabe['Zuständig'].'<br><br>');
}
*/

