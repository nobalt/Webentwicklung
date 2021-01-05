<?php
//A2 Teil a
$aktuellesProjekt = array(
	0 => array(
		'Überschrift' => 'ToDo:',
		'1_Aufgabe' => 'HTML Datei erstellen (Max Mustermann)',
		'2_Aufgabe' => 'CSS Datei erstellen (Max Mustermann)'
	),
    1 => array(
		'Überschrift' => 'Erledigt:',
		'1_Aufgabe' => 'PC eingeschaltet (Petra Müller)',
		'2_Aufgabe' => 'Kaffee trinken (Petra Müller)'
	),
    2 => array(
		'Überschrift' => 'Verschoben:',
		'1_Aufgabe' => 'Für die Uni lernen (Max Mustermann)',
		'2_Aufgabe' => null
	),
);


echo '<pre>';
var_dump($aktuellesProjekt);
echo '</pre>';

echo '<hr>';
//A2 Teil b
foreach($aktuellesProjekt as $Projekt){
    if(isset($Projekt['Überschrift'],$Projekt['1_Aufgabe'],$Projekt['2_Aufgabe'])){
        echo ('Array ist vollständig'.'<br>');
    }else{
        echo ('Array ist nicht vollständig'.'<br>');
    }
}



//A2 Teil c
echo '<hr>';
foreach($aktuellesProjekt as $projekt){
    echo('Überschrift: '.$projekt['Überschrift'].'<br>');
    echo('1 Aufgabe: '.$projekt['1_Aufgabe'].'<br>');
    echo('2 Aufgabe: '.$projekt['2_Aufgabe'].'<br><br>');
}



