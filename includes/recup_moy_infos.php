<?php

function getMoyenneIndicateurs($pays, $annee) {
    $conn = getBDD();   
    if ($annee) {
        $sql = "SELECT p.nom_pays, i.annee, i.taux_natalite, i.taux_mortalite, i.consommation_electricite, i.pib, 
                i.pib_par_habitant, i.utilisation_internet, i.mortalite_infantile, 
                i.esperance_vie, i.densite_population, i.taux_chomage 
                FROM indicateurs i
                INNER JOIN pays p ON i.code_pays = p.code_pays
                WHERE p.nom_pays = ? AND i.annee = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $pays, $annee);
    } else {
        $sql = "SELECT p.nom_pays, i.annee, AVG(i.taux_natalite) as taux_natalite, 
                AVG(i.taux_mortalite) as taux_mortalite,
                AVG(i.consommation_electricite) as consommation_electricite, 
                AVG(i.pib) as pib,
                AVG(i.pib_par_habitant) as pib_par_habitant, 
                AVG(i.utilisation_internet) as utilisation_internet,
                AVG(i.mortalite_infantile) as mortalite_infantile, 
                AVG(i.esperance_vie) as esperance_vie,
                AVG(i.densite_population) as densite_population, 
                AVG(i.taux_chomage) as taux_chomage
                FROM indicateurs i
                INNER JOIN pays p ON i.code_pays = p.code_pays
                WHERE p.nom_pays = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $pays);
    }
    
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

?>