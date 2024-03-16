<?php 

function dd($param) {
    echo("<br>");
    echo("<pre>");
    echo("<code>");
    var_dump($param);
    echo("</code>");
    echo("</pre>");
    echo("<br>");
}

// $tabouret = [
//     "hauteur_cm" => 100,
//     "couleur" => "vert kaki",
//     "poids_g" => 1500,
//     "etat" => "plié" // "plié" ou "déplié"
// ];

// function plier($tabouret) {
//     $tabouret["etat"] = "plié";
// }
// plier($tabouret);

// function deplier($tabouret) {
//     $tabouret["etat"] = "déplié";
// }
// deplier($tabouret);


class Tabouret {
    public $couleur = "vert kaki";
    public $hauteur_cm = 100;
    public $etat = "plié"; // "plié" ou "déplié"

    public function changer_etat($etat) {
        // changer l'état
        if($etat == "plié") {
            $this->plier();
        } elseif($etat == "déplié") {
            $this->deplier();
        }
    }

    public function plier() {
        echo("plier !");
        $this->etat = "plié";
    }

    public function deplier() {
        echo("déplier !");
        $this->etat = "déplié";
    }

}

// Création d'un objet stocké dans "$t"
$t = new Tabouret();
// accéder à la couleur
// dd($t->couleur);
// changer la couleur : 
// $t->couleur = "blanc";
// dd($t);

// $u = new Tabouret();
// dd($u);

// $t->plier();
// $u->deplier();

dd($t);
$t->changer_etat("déplié");
dd($t);