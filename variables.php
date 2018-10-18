<?php
// =================================
// VARIABLES GLOBALES : [$GLOBALS]
// =================================
    function modifierChaine1()
    {
        $chaine = 'Salut !';
    }

    $chaine = 'Hello !';
    modifierChaine1();
    echo $chaine;
    // La variable $chaine, créée dans la fonction modifierChaine(), est dite locale à cette fonction ; la variable $chaine créée 2 lignes plus haut n'est donc pas modifiée, donc à l'écran s'affichera « Hello ! ».


// =================================
// RETOURNER REFERENCE : [ & ]
// =================================
    class MaClasse
    {
      public $attribut = 'Voici un attribut';
        public function &recupererAttribut() // Notez le symbole & juste avant le nom de la fonction : ça veut dire que cette fonction renverra une référence.
        {
            return $this->attribut; // Que je ne vous surprenne jamais en train de faire précéder votre variable de retour d'un & !
        }
    }

    $monObjet = new MaClasse();
    $variable = &$monObjet->recupererAttribut(); // Notez le symbole & juste avant le nom de la fonction (et, dans ce cas, de mon objet).
    $monObjet->attribut = 'Voici un attribut modifié'; // On modifie l'attribut de l'objet.
    echo $monObjet->attribut . ' - ' . $variable; // Affiche « Voici un attribut modifié - Voici un attribut modifié ».

// =================================
// VARIABLES STATIQUES : [ static ]
// =================================
    function &maFonction ($afficher = false) // N'oubliez pas le symbole & avant le nom de la fonction.
    {
        static $variable = 'Voici une variable';

        if ($afficher) {
            echo $variable;
        }
        return $variable; // Ne mettez surtout pas de & avant le nom de la variable !
    }

    function modifierChaine (&$variable) { // On attend une référence en argument.
        $variable = 'Voici une variable modifiée';
    }

    $alias = &maFonction(); // $alias est un alias de la variable statique $variable.
    modifierChaine ($alias);
    maFonction (true); // Affiche « Voici une variable modifiée ».

// ==============================================================
// VARIABLES DE FONCTIONS ou VARIALBES DE VARIABLES : [ static ]
// ==============================================================
    // Variable de variable
    $texte = 'Hello world !';
    $variable = 'texte';
    echo ${$variable}; // Affiche « Hello world ! ».
    // ou
    echo $$variable; // Affiche « Hello world ! ».

    // SUR FONCTION
    $nomFonction = 'strlen';
    $chaine = 'Voici une chaîne de caractères';
    echo $nomFonction ($chaine); // Affiche « 30 ».

// ========================================
// LES CASTS (Caster un type) : [ static ]
// ========================================
    $chaineDeCaracteres = '12'; // Variable de type string.
    $nombre = (int)$chaineDeCaracteres;

    $resultat = (int)(12.5) + (int)(15.6);
    echo $resultat; // Affiche « 27 ».

// ========================================
// Fonctions UTILES
// ========================================
// isset();
// unset(); Supprimer variable
// intval();
// floatval();
?>