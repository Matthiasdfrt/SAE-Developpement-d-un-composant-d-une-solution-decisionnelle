<?php
require '../models/pays.php';
require '../models/indicateur.php';
require '../includes/recup_moy_infos.php';

function afficherInfos(){
    $nom_pays = isset($_POST['nom_pays']) ? $_POST['nom_pays'] : null;
    $annee = isset($_POST['annee']) ? $_POST['annee'] : null;
    $moy = getMoyenneIndicateurs($nom_pays, $annee);
    $pays = getPays();
    $annees = getAnnees();
    
    require '../views/infos_pays.php';
}

afficherInfos();
?>

