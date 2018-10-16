<?php
    // Procedural
    $resultat=0;
    for ($i=1; $i < 6; $i++) { 
        $resultat=$resultat+$i;
        echo "resultat= ".$resultat."<br/>";
    }
    unset($i);
    echo "Somme des 5 premiers entiers : ".$resultat."<br/>";
    unset($resultat);

    // POO
    class Somme_Entiers {
        private $resultat;
        // --- Constructeur ---
        function __construct() {
            echo "--- Appel du constructeur --- <br/>";
            $this->resultat = 0;
            echo "Variable interne resultat initialisée à : ".$this->resultat."<br/>";
        }
        // --- Desctructeur ---
        function __destruct() {
            echo "--- Appel du destructeur --- <br/>";
            unset($this->resultat);
            if(!isset($this->resultat)) {
                echo "Variable interne resultat supprimée<br/>";
            }
        }
        public function Somme(){
            echo "--- Appel de la méthode Somme ---";
            for ($i=0; $i < 6; $i++) { 
                $this->resultat = $this->resultat+$i;
                echo "resultat = ".$this->resultat."<br/>";
            }
        }
        // --- Methode affichage du resultat ---
        public function Affichage() {
            echo "--- Appel de la méthode Affichage ---<br/>";
            echo "Somme des 5 premiers entiers : ".$this->resultat."<br/>";
        }
    }
    // === Corps du programme===
    $calcul = new Somme_Entiers();
    $calcul->Somme();
    $calcul->Affichage();
    unset($calcul);

    echo "================================================= <br/>";
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Saisie de valeurs via un formulaire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div style="text-align=:center; width:250px; border:solid 1px black;">Saisie d'information</div>
    <br>
    <form action="formulaire.php" method="post">
        Nom: <input type="text" name="nom" size="20"/> <br/>
        Prénom: <input type="text" name="prenom" size="30"/> <br/>
        Age: <input type="text" name="age" size="10"/> <br/><br/>
        <input type="submit" name="valider"/> <br/>
        <?php //if(isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['date'])) {return "submit";}?>
        <input type="reset" name="Effacer le formulaire"/> <br/>
    </form>
</body>
</html>