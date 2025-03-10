<?php
require '../models/pays.php';
require '../models/indicateur.php';
require '../includes/recup_moy_infos.php';

function afficherInfos(){
    $nom_pays = isset($_GET['nom_pays']) ? $_GET['nom_pays'] : null;
    $annee = isset($_GET['annee']) ? $_GET['annee'] : null;
    $moy = getMoyenneIndicateurs($nom_pays, $annee);
    $pays = getPays();
    $annees = getAnnees();
    
    require '../views/infos_pays.php';
}

afficherInfos();
?>

