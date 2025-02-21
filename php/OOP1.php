<?php

class Auto {
    public $merk;
    public $bouwjaar;
    public $kleur;
    public $topsnelheid;
    public $eigenaar;

    public function __construct($merk, $bouwjaar, $kleur, $topsnelheid, $eigenaar) {
        $this->merk = $merk;
        $this->bouwjaar = $bouwjaar;
        $this->kleur = $kleur;
        $this->topsnelheid = $topsnelheid;
        $this->eigenaar = $eigenaar;
    }

    public function print_info() {
        echo "Merk: " . $this->merk . "\n";
        echo "Bouwjaar: " . $this->bouwjaar . "\n";
        echo "Kleur: " . $this->kleur . "\n";
        echo "Topsnelheid: " . $this->topsnelheid . "\n";
        echo "Eigenaar: " . $this->eigenaar . "\n";
    }

    public function rijden() {
        echo $this->merk . " is bezit \n";
    }
}
?>