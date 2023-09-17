<?php
include 'forme.php';

class Rectangle extends Forme {
    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function calculerAire() {
        return $this->longueur * $this->largeur;
    }
    public function calculerPerimetre() {
        return 2 * ($this->longueur + $this->largeur);
    }
}

$rectangle = new Rectangle(4, 5);
echo "Aire du rectangle : " . $rectangle->calculerAire() . "\n";
echo "Périmètre du rectangle : " . $rectangle->calculerPerimetre() . "\n";