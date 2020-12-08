<?php
$personen = array(
	0 => array(
		'id' => 1,
		'Name' => 'Max Mustermann',
		'E-Mail' => 'mustermann@muster.de',
		'In_Projekt' => 'Ja'
	),
	1 => array(
		'id' => 2,
		'Name' => 'Petra Müller',
		'E-Mail' => 'petra@mueller.de',
		'In_Projekt' => 'Nein'
	)
);


echo '<pre>';
var_dump($personen);
echo '</pre>';

/*
foreach($personen as $person){
    echo($person['id'].'<br>');
    echo('Name: '.$person['Name'].'<br>');
    echo('E-Mail: '.$person['E-Mail'].'<br>');
    echo('In Projekt: '.$person['In_Projekt'].'<br><br>');
}
*/

?>