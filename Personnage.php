<?php
class Personnage {
    //==========================================
    // CARACTERISTIQUES OBJET - Attributs
    //==========================================
    
    // Attributs
    private $_id;
    private $_nom;
    private $_force;
    private $_degats;
    private $_experience = 0;
    private $_niveau;

    private static $_compteur = 0;
    private static $_texteADire = "Je vais te faire la peau !";

    //==========================================
    //  - Constantes
    //==========================================
    const F_PETITE = 15;
    const F_MOYENNE = 26;
    const F_GRANDE = 42;

    const DEGATS_LEGERS = 15;
    const DEGATS_MOYENS = 42;
    const DEGATS_SEVERES = 85;


    //==========================================
    // FONCTIONNALITES OBJET - Methods
    //==========================================

    // __construct
    // ============================================
    public function __construct($forceInit, $degats) {
        echo "Appel du constructeur.<br/>";
        $this->setForce($forceInit);
        $this->setDegats($degats);
        $this->_experience = 1;
        self::$_compteur++;
    }

    // ============================================
    // *** GETTERS
    // ============================================
    public function getId() { return $this->_id;}
    public function getNom() { return $this->_nom; }
    public function getDegats() { return $this->_degats; }
    public function getExperience() { return $this->_experience; }
    public function getForce() { return $this->_force; }
    public function niveau() { return $this->_niveau; }

    // *** GETTERS POUR STATIC
    public static function getCompteur() {return self::$_compteur; }

    // ============================================
    // *** SETTERS
    // ============================================
    public function setId($id) {
        if (is_int($id) && $id > 0) {
            $this->_id = $id;
        }
    }
    public function setNom($nom) {
        if (is_string($nom)) {
            $this->_nom = $nom;
        }
    }
    public function setForce($force) {
        if (in_array($force, [self::F_PETITE, self::F_MOYENNE, self::F_GRANDE])) {
            $this->_force = $force;
        }
    }
    public function setDegats($degats) {
        if (in_array($degats, [self::DEGATS_LEGERS, self::DEGATS_MOYENS, self::DEGATS_SEVERES])) {
            $this->_degats= $degats;
        }
    }
    public function setExperience($experience) {
        if (is_int($experience) && $experience < 120) {
            $this->_experience= $experience;
        }
    }
    public function setNiveau($niveau) {
        if (is_int($niveau) && $niveau > 0 && $niveau < 80) {
            $this->_experience= $experience;
        }
    }
    // ============================================
    // *** ACTIONS
    // ============================================
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