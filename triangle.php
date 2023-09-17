<?php
include 'Forme.php';

class Triangle extends Forme {
    private $cote;

    public function __construct($cote) {
        $this->cote = $cote;
    }

    public function calculerAire() {
        return $this->cote * $this->cote;
    }
    public function calculerPerimetre() {
        return $this->cote + $this->cote + $this->cote;
    }
}

$triangle = new Triangle(5);
echo "Aire du triangle : " . $triangle->calculerAire() . "\n";
echo "Perimetre du triangle : " . $triangle->calculerPerimetre() . "\n";