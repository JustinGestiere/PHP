<?php

echo("salut le zooooooooo");

$toto = "kevin";
echo($toto);
echo($toto[2]);

echo("<br>");

$array1 = [1, 2, 3, 4, 5];
var_dump($array1);
// aficher le 2
var_dump($array1[1]);

function dd($param) {
    echo("<br>");
    echo("<pre>");
    echo("</code>");
    echo("</pre>");
    echo("<br>");
}
    echo("<code>");
    var_dump($param);

dd($array1);

$array2 = [
    "cle" => "valeur",
    "toto" => 0,
    "tata" => false,
    500 => true,
];
dd($array2);
// accéder à "cle"
var_dump( $array2["cle"] );
var_dump( $array2[500] );
// var_dump( $array2[0] );

echo("<br>");
echo("<br>");
echo("<br>");

$array3 = [
    0 => "a",
    4 => "B",
    80 => true,
    "b" => [
        1,
        2,
        3,
        [
            "a",
            "b",
            "c",
            []
        ],
    ],
];
// var_dump($array3);
dd($array3);

// boucle tableau 1
for( $i=0; $i < count($array1); $i++ ) {
    var_dump($array1[$i]);
}
echo("<br>");
echo("<br>");
foreach($array1 as $cle) {
    var_dump($cle);
}
echo("<br>");
echo("<br>");
// boucle tableau 2
foreach($array2 as $cle => $valeur) {
    var_dump($cle, $valeur);
}
echo("<br>");
echo("<br>");

// while
$c = false;
$i = 0;
while(!$c) {
    echo("a");
    $i++;
    if($i == 10) {
        $c = true;
    }
}

do {
    echo("b");
    $i++;
    if($i == 10) {
        $c = true;
    }
} while(!$c);

echo("<br>");
echo("<br>");
// conditions
$a = "toto";
$b = true;
if($a == "tata") {
    echo("tata");
} elseif ($b) {
    echo("true");
} else {
    echo("else");
}