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


echo '<hr>';
//A2 Teil b
foreach($personen as $Projekt){
    if(isset($Projekt['id'],$Projekt['Name'],$Projekt['E-Mail'],$Projekt['In_Projekt'])){
        echo ('Array ist vollständig'.'<br>');
    }else{
        echo ('Array ist nicht vollständig'.'<br>');
    }
}

/*
foreach($personen as $person){
    echo($person['id'].'<br>');
    echo('Name: '.$person['Name'].'<br>');
    echo('E-Mail: '.$person['E-Mail'].'<br>');
    echo('In Projekt: '.$person['In_Projekt'].'<br><br>');
}
*/

