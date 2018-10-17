<?php
class Personnage {
    // Attributs
    private $_degats = 0; // Les dégâts du personnage.
    private $_experience = 0; // L'expérience du personnage.
    private $_force = 20; // La force du personnage (plus elle est grande, plus l'attaque est puissante).

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
    // Setters
    public function setForce($force) {
        if (!is_int($force)) {
            trigger_error("La force d'un personnage doit être un nombre entier", E_USER_WARNING);
            return;
        }
        if ($force > 100) {
            trigger_error("La force d'un personnage ne peut dépasser 100", E_USER_WARNING);
            return;
        }
        $this->_force = $force;
    }
    public function setDegats($degats) {
        if (!is_int($degats)) {
            trigger_error("Les dégats doit être un nombre entier.");
            return;
        }
        if ($degats > 45) {
            trigger_error("Les dégats ne peuvent pas être supérieurs à 45.");
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
}

// *** Instance de class
$perso1 = new Personnage;
$perso2 = new Personnage;

// *** Init des attributs
$perso1->setForce(24);
$perso1->setExperience(15);

$perso2->setForce(8);
$perso2->setExperience(7);

// *** Combat !
$perso1->frapper($perso2);
$perso1->gagnerExperience();
$perso2->frapper($perso1);
$perso2->gagnerExperience();
$perso2->frapper($perso1);
$perso2->gagnerExperience();
echo "=====================<br/>";
echo '*** Stats Perso 1 ***<br/>';
echo "=====================<br/>";
$perso1->afficherStats();

echo "=====================<br/>";
echo '*** Stats Perso 2 ***<br/>';
echo "=====================<br/>";
$perso2->afficherStats();

echo "=====================<br/>";
echo '**** Stats solos ****<br/>';
echo "=====================<br/>";
echo "Le personnage 1 a ",$perso1->force(), " de force. Et le personage 2, ", $perso2->force(), " points de force.<br/>";
echo "Le personnage 1 a ",$perso1->experience(), " d'XP. Et le personage 2, ", $perso2->experience(), " points d'XP.<br/>";
echo "Le personnage 1 a prit ".$perso1->degats(), " point de degats contre ",$perso2->degats(), " pour le second.<br/>";

echo "test commit and push";