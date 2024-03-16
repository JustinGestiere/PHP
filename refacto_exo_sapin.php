<?php

class Main {
    private $nbEtage = 10;
    private $nbMaxEtoile;
    private $nbEtoile1 = 1;
    private $nbEtoile2 = 3;
    private $nbEtoile3 = 7;
    private $isBalls = TRUE;
    private $isGarland = TRUE;
    private $garland;

    public function __construct() {
        $this->nbMaxEtoile = $this->getMaxStarsNumber();
        $this->garland = $this->defineGarlandSymbol();
        
        $this->cones();
        $this->drawBalls();
        $this->ballsLine();
        $this->drawTrunk();
        
    }

    private function getMaxStarsNumber() {
        return (3 + 2*($this->nbEtage - 1))*2 + 1;
    }

    private function defineGarlandSymbol() {
        if ($this->isGarland == TRUE){
            return "S";
        }
        else{
            return " ";
        }
    }

    private function line($a) {
        $row = "<pre style = 'margin: 0;'>" . " " . str_repeat(" ", ($this->nbMaxEtoile - $a) / 2) . str_repeat("*", $a) . str_repeat(" ", ($this->nbMaxEtoile - $a) / 2) . " " . "</pre>";
        echo $row;
    }

    private function cones(){
        for($i = 0 ; $i <= $this -> nbEtage - 1 ; $i++){
            $this->line($this->nbEtoile1);
            $this->line($this->nbEtoile2);
            $row3 = "<pre style = 'margin: 0;'>" . str_repeat(" ", ($this->nbMaxEtoile - $this->nbEtoile3) / 2) . $this->garland . str_repeat("*", $this->nbEtoile3) . $this->garland . str_repeat(" ", ($this->nbMaxEtoile - $this->nbEtoile3) / 2) . "</pre>";
            echo $row3;

            $this->nbEtoile1 = $this->nbEtoile2;
            $this->nbEtoile2 = $this->nbEtoile3;
            $this->nbEtoile3 += 4;
        }
    }
    //
    private function drawBalls() {
        
    }

    private function ballsLine() {
        if ($this->isBalls == FALSE){
            for($i = 0; $i <= $this->nbEtage - 10; $i++){
                echo "<pre style = 'margin: 0;'>" . str_repeat("  ", ($this->nbMaxEtoile - 3)/4) . " " . str_repeat("*", 3) . " " . str_repeat("  ", ($this->nbMaxEtoile - 3)/4) . "</pre>";
                echo "<pre style = 'margin: 0;'>" . str_repeat("  ", ($this->nbMaxEtoile - 3)/4) . " " . str_repeat("*", 3) . " " . str_repeat("  ", ($this->nbMaxEtoile - 3)/4) . "</pre>";
            }
        }
        else{
            for($i = 0; $i <= $this->nbEtage - 10; $i++){
                echo "<pre style = 'margin: 0;'>" . str_repeat(" |", ($this->nbMaxEtoile - 3)/4) . " " . str_repeat("*", 3) . " " . str_repeat("| ", ($this->nbMaxEtoile - 3)/4) . "</pre>";
                echo "<pre style = 'margin: 0;'>" . str_repeat(" 0", ($this->nbMaxEtoile - 3)/4) . " " . str_repeat("*", 3) . " " . str_repeat("0 ", ($this->nbMaxEtoile - 3)/4) . "</pre>";
            }
            }
        }
//
    private function drawTrunk() {
        for($i = 0; $i <= $this->nbEtage + 2; $i++){
            echo "<pre style = 'margin: 0;'>" . str_repeat(" ", ($this->nbMaxEtoile - 1) / 2) . str_repeat("*", 3) . str_repeat(" ", ($this->nbMaxEtoile - 3) / 2) . "</pre>";
        }
    }    
}

new Main();

/*
//Idee Finale

class Main2 {
    public function __construct(){
        new Tree():
    }
}

class Tree{
    public function __construct()
    {
        //Triangles
        for(...) {
            new Triangle(..);
        }
        //Balls
        new Balls(...);
        //Tronc
        new Trunk();
    }
}

new Main2();

*/