<?php

class Voiture {
    public $couleur = "noir";
    public $VitesseMax = "130";
    public $NombreChevaux = "50";
    public $etat = "Roule";

    public function changer_etat($etat){

        if($etat == "Roule") {
            $this->Rouler();
        } 

        elseif($etat == "Arret") {
            $this->Arreter();
        }
    }

    public function Rouler() {
        $this->etat = "Roule";
    }

    public function Arreter() {
        $this->etat = "Arret";
    }
}   

$Peugeot = new Voiture();
echo $Peugeot->etat;
echo"</br>";
$Peugeot->changer_etat("Arret");
echo $Peugeot->etat;


/**********************************************************************/
/******************************** OU **********************************/
/**********************************************************************/

class Voiture {

    public $couleur;
    public $poid;
    public $etat = "démarré";

    public function demarrer() {
        $this->etat = "démarré";
    }

    public function eteindre() {
        $this->etat = "eteindre";
    }

}

$v = new Voiture();
var_dump($v->etat);
$v->eteindre();
var_dump($v->etat);
$v->demarrer();
var_dump($v->etat);