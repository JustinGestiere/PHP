<?php

$chiffre1 = 1;
$chiffre2 = 2;
$toto = "kevin";
$array1 = [1, 2, 3, 4, 5];
$array2 = [
    "cle" => "valeur",
    "toto" => 0,
    "tata" => false,
    500 => true,
];

function dd($param) {
    echo("<br>");
    echo("<pre>");
    echo("<code>");
    var_dump($param);
    echo("</code>");
    echo("</pre>");
    echo("<br>");
}
dd($array2);

echo("Bonjour je fais des tests</br>
    je vais essayer de faire un tableau</br>");
echo"</br>";    
echo($chiffre1);
echo"</br>";
var_dump($chiffre1);
echo"</br>";
echo"</br>";
echo($chiffre1+$chiffre2);
echo"</br>";
var_dump($chiffre1+$chiffre2);
echo"</br>";
echo"</br>";
echo($toto);
echo"</br>";
echo($toto[2])," : c'est v qui s'affiche car c'est la deuxieme valeur du prenom sachant que ça commence par 0";
echo"</br>";
echo"</br>";
echo"on va faire un tableau";
echo"</br>";
var_dump($array1);
echo"</br>";

echo"</br>";
// aficher le 2
var_dump($array1[1]);
echo"</br>";
