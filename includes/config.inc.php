<?php
function getBDD() {
    static $conn = null; 
    //vérifie si la connexion est déjà établie
    if ($conn === null) {
        $db_host = "localhost";
        $db_name = "jouets";
        $db_user = "root";
        $db_pass = "";

        // Crée la connexion
        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

        // Vérifie si la connexion a échoué
        if (mysqli_connect_error()) {
            echo mysqli_connect_error();
            exit; //ou exit(msg) pour terminer l'exécution
        }
        echo "Connexion réussie à la BDD: ", $db_name;
    }

    return $conn;
}
?>
