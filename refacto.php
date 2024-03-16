<?php

// code de base
for($i=0; $i < 10; $i++) {
    echo("a");
}

for($i=0; $i < 30; $i++) {
    echo("b");
}

for($i=0; $i < 50; $i++) {
    echo("c");
}

for($i=0; $i < 2; $i++) {
    echo("d");
}

for($i=0; $i < 8; $i++) {
    echo("e");
}

echo("<br>");
echo("<br>");
echo("<br>");


// première étape de refacto : limiter le code dupliqué en le variabilisant
function a($nb, $l) {
    for($i=0; $i < $nb; $i++) {
        echo($l);
    }
}
a(10, "a");
a(30, "b");
a(50, "c");
a(2, "d");
a(8, "e");

echo("<br>");
echo("<br>");
echo("<br>");

// deuxième étape : on continue d'optimiser : 
function b($nb, $l) {
    for($i=0; $i < $nb; $i++) {
        echo($l);
    }
}
$z = [
    [10, "a"],
    [30, "b"],
    [50, "c"],
    [2, "d"],
    [8, "e"],
];
foreach($z as $x) {
    b($x[0], $x[1]);
}

// dernière étape : rendre le code COMPREHENSIBLE


function afficheur_lettres($nombre_iteration, $lettre) {
    for($i=0; $i < $nombre_iteration; $i++) {
        echo($lettre);
    }
}
$datas = [
    [10, "a"],
    [30, "b"],
    [50, "c"],
    [2, "d"],
    [8, "e"],
];

foreach($datas as $data) {
    afficheur_lettres($data[0], $data[1]);
}