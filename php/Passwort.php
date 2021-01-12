<!-- < ?php

$passwort ='ichbinsicher';
$passwort_hashed = '';
$passwort_verified='Nein';

$passwort_hashed = password_hash($passwort,PASSWORD_DEFAULT,["cost"=>10]);

echo('Passwort: '.$passwort.'<br>');
echo('Hased: '.$passwort_hashed.'<br><br>');

if(password_verify($passwort,$passwort_hashed))$passwort_verified='Ja';

echo('Verified: '.$passwwort_verified. '<br><br>');
$passwort_info=password_get_info($passwort_hashed);

echo('Passwort Infos:<br>');
print_r($passwort_info);

echo('<hr>');

$timeTarget=0.05;

$cost=8;
do{
    cost++;
    $start = microtime(true);
    password_hash("test",PASSWORD_DEFAULT,["cost"=>$cost]);
    $end = microtime(true);
  }while (($end - $start) < $timeTarget);

echo "Appropriate Cost Found: ".$cost;
?>
-->