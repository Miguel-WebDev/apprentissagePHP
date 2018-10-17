<?php
require_once('functions.php');
spl_autoload_register('chargerClasse');

$donnees = [
    'id' => 16,
    'nom' => 'Vyk12',
    'force' => 5,
    'degats' => 55,
    'niveau' => 4,
    'experience' => 20
];

$hero = new Personnage($donnees);
$hero->afficherStats()

?>