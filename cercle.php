<?php
include 'forme.php';

class Cercle extends Forme {
    private $rayon;

    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    public function calculerAire() {
        return pi() * $this->rayon * $this->rayon;
    }
    public function calculerPerimetre() {
        return 2 * pi() * $this->rayon;
    }
}

$cercle = new Cercle(9);
echo "Aire du carré : " . $cercle->calculerAire() . "\n";
echo "Périmètre du carré : " . $cercle->calculerPerimetre() . "\n";