<?php

function getMoyenneIndicateurs($pays, $annee) {
    $conn = getBDD();
    if ($annee) {
        $sql = "SELECT taux_natalite, taux_mortalite, consommation_electricite, pib, 
                pib_par_habitant, utilisation_internet, mortalite_infantile, 
                esperance_vie, densite_population, taux_chomage 
                FROM indicateurs 
                WHERE code_pays = ? AND annee = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $pays, $annee);
    } else {
        $sql = "SELECT AVG(taux_natalite) as taux_natalite, 
                AVG(taux_mortalite) as taux_mortalite,
                AVG(consommation_electricite) as consommation_electricite, 
                AVG(pib) as pib,
                AVG(pib_par_habitant) as pib_par_habitant, 
                AVG(utilisation_internet) as utilisation_internet,
                AVG(mortalite_infantile) as mortalite_infantile, 
                AVG(esperance_vie) as esperance_vie,
                AVG(densite_population) as densite_population, 
                AVG(taux_chomage) as taux_chomage
                FROM indicateurs 
                WHERE code_pays = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $pays);
    }
    
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

?>