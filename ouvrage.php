<?php
class Ouvrage {
    public static $titre;
    public static $auteur;
    public static $isbn;

    // DOIS-JE INCLURE ICI CES METHODES ?
    // DOIS-JE AVOIR UN DECONSTRUCT ?
    public static function AjoutOuvrage($titre, $auteur, $isbn) {
        echo "--- Appel du constructeur --- <br/>";
        self::$resultat = $titre;
        self::$auteur = $auteur;
        self::$isbn = $isbn;
        //echo " Propriétés initialisées à : Titre : ".self::$titre.", Auteur : ".self::$auteur.", ISBN : ".self::$isbn."<br/>";
        return self::$titre;
    }

}

$essaiOuvrage = new Ouvrage;
$essaiOuvrage::AjoutOuvrage("Mon livre","Machin chouette","4582");
echo " Propriétés initialisées à : Titre : ".Ourage::$titre.", Auteur : ".Ourage::$auteur.", ISBN : ".Ourage::$isbn."<br/>";

class Bibliotheque {

}
?>