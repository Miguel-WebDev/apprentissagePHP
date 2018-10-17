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
    const F_PETITE          = 15;
    const F_MOYENNE         = 26;
    const F_GRANDE          = 42;

    const DEGATS_LEGERS     = 15;
    const DEGATS_MOYENS     = 42;
    const DEGATS_SEVERES    = 85;
    const DEGATS_NULL       = 0;

    //==========================================
    // FONCTIONNALITES OBJET - Methods
    //==========================================

    // __construct
    // ============================================
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }
    // Hydrater l'objet = Initialiser les valeurs des attributs
    private function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            $method = 'set'.ucfirst($key);
            // Si le setter correspondant existe.
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
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
        if (is_int($id) && $id > 0) { $this->_id = $id; }
    }
    public function setNom($nom) {
        if (is_string($nom)) { $this->_nom = $nom; }
    }
    public function setForce($force) {
        if (is_int($force) && $force > 0) { $this->_force = $force; }
    }
    public function setDegats($degats) {
        if (is_int($degats) && $degats > 0) { $this->_degats = $degats; }
    }
    public function setExperience($experience) {
        if (is_int($experience) && $experience < 120) { $this->_experience= $experience; }
    }
    public function setNiveau($niveau) {
        if (is_int($niveau) && $niveau > 0 && $niveau < 80) { $this->_niveau= $niveau; }
    }
    // ============================================
    // *** ACTIONS
    // ============================================
    public function frapper(Personnage $persoAFrapper) {
        $persoAFrapper->_degats += $this->_force;
    }
    public function gagnerExperience() { $this->_experience += 4; }
    public function afficherStats() {
        echo "Nom : ".$this->getNom()."<br/>";
        echo "Dégats : ".$this->getDegats()."<br/>";
        echo "Force : ".$this->getForce()."<br/>";
        echo "Experience : ".$this->getExperience()."<br/>";
        echo "Niveau : ".$this->niveau()."<br/>";
    }

    public static function parler() { echo self::$_texteADire; }
} ?>