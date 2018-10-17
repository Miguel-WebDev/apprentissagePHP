<?php
require_once('functions.php');
// On enregistre la fonction en autoload pour qu'elle soit appelée 
// dès qu'on instanciera une classe non déclarée.
spl_autoload_register('chargerClasse');


// *** Instance de class
$perso1 = new Personnage(Personnage::F_MOYENNE, Personnage::DEGATS_MOYENS);
$perso2 = new Personnage(Personnage::F_PETITE, Personnage::DEGATS_LEGERS);

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
echo "<br/>=====================<br/>";
Personnage::parler();
echo "<br/>=====================<br/>";
echo "La classe Personnage a donnée naissance à " . Personnage::getCompteur() . " instances.";