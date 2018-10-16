<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
</head>
<body>
    <table style="width: 40%;">
        <caption>Interprétation de la saisie du formulaire</caption>
        <thead>
            <tr>
                <th>Variables</th>
                <th>Valeurs</th>
            </tr>
        </thead>
        <?php
        if (isset($_POST)){
            // --- On recupère les données ---
            $nom    = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $age    = $_POST["age"];
            // --- On traite les données ---
            $nom    = strtoupper($nom);
            $prenom = strtoupper($prenom);
            $age    = intval($age);
            // --- On affiche les données dans un tableau ---
            echo "<tr><td>Nom : </td><td>".$nom."</td></tr>";
            echo "<tr><td>Prénom : </td><td>".$prenom."</td></tr>";
            echo "<tr><td>Age : </td><td>".$age."</td></tr>";
        } ?>
    </table>
</body>
</html>