<?php
#Les fonctions de traitement de pays

require_once "../includes/config.inc.php";
#__DIR__ récupérer le chemin absolu du dossier ou se trouve le fichier

function getPays(){
	$conn = getBDD();
	$pays = [];
	$sql = "SELECT * FROM pays";
	$res = mysqli_query($conn, $sql);
	if($res === false){
		echo mysqli_error($conn);
	}
	else{
		
		$pays = mysqli_fetch_all($res, MYSQLI_ASSOC);
	}
	return $pays;

}
?>