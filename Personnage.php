<?php
class Personnage {
    // Attributs
    private $_degats = 0; // Les dégâts du personnage.
    private $_experience = 0; // L'expérience du personnage.
    private $_force = 20; // La force du personnage (plus elle est grande, plus l'attaque est puissante).

    private static $_compteur = 0;
    private static $_texteADire = "Je vais te faire la peau !";

    // Constantes
    const F_PETITE = 15;
    const F_MOYENNE = 26;
    const F_GRANDE = 42;

    const DEGATS_LEGERS = 15;
    const DEGATS_MOYENS = 42;
    const DEGATS_SEVERES = 85;

    // Getters
    public function degats() {
        return $this->_degats;
    }
    public function experience() {
        return $this->_experience;
    }
    public function force() {
        return $this->_force;
    }
    // Getters pour STATIC
    public static function getCompteur() {
        return self::$_compteur;
    }

    // Setters
    public function setForce($force) {
        if (in_array($force, [self::F_PETITE, self::F_MOYENNE, self::F_GRANDE])) {
            $this->_force = $force;
        }
        $this->_force = $force;
    }
    public function setDegats($degats) {
        if (!in_array($degats, [self::DEGATS_LEGERS, self::DEGATS_MOYENS, self::DEGATS_SEVERES])) {
            trigger_error("Les dégats doit être un nombre entier.");
            return;
        }
        $this->_degats= $degats;
    }
    public function setExperience($experience) {
        if (!is_int($experience)) {
            trigger_error("Les dégats doit être un nombre entier.");
            return;
        }
        if ($experience > 120) {
            trigger_error("Les dégats ne peuvent pas être supérieurs à 45.");
            return;
        }
        $this->_experience= $experience;
    }
    // ============================================
    // Methods
    public function __construct($forceInit, $degats) {
        echo "Appel du constructeur.<br/>";
        $this->setForce($forceInit);
        $this->setDegats($degats);
        $this->_experience = 1;
        self::$_compteur++;
    }
    public function frapper(Personnage $persoAFrapper) {
        $persoAFrapper->_degats += $this->_force;
    }
    public function gagnerExperience()
    {
        $this->_experience += 4;
    }
    public function afficherStats() {
        echo "Dégats : ".$this->_degats;
        echo "<br/>Experience : ".$this->_experience."<br/>";
    }

    public static function parler() {
        echo self::$_texteADire;
    }
} ?>