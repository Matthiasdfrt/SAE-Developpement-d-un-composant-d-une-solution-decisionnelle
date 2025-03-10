<?php
require '../models/pays.php';
require '../models/indicateur.php';

function afficherInfos(){
    $pays = getPays();
    $annees = getAnnees();
    require '../views/infos_pays.php';
}

afficherInfos();
?>