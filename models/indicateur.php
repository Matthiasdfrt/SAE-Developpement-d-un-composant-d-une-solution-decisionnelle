<?php
#Les fonctions de traitement de pays

require_once "../includes/config.inc.php";
#__DIR__ récupérer le chemin absolu du dossier ou se trouve le fichier

function getIndicateurs(){
	$conn = getBDD();
	$indi = [];
	$sql = "SELECT * FROM indicateurs";
	$res = mysqli_query($conn, $sql);
	if($res === false){
		echo mysqli_error($conn);
	}
	else{
		mysqli_close($conn);
		$indi = mysqli_fetch_all($res, MYSQLI_ASSOC);
	}
	return $indi;

}

function getAnnees(){
	$conn = getBDD();
	$annee = [];
	$sql = "SELECT DISTINCT annee FROM indicateurs";
	$res = mysqli_query($conn, $sql);
	if($res === false){
		echo mysqli_error($conn);
	}
	else{
		mysqli_close($conn);
		$annee = mysqli_fetch_all($res, MYSQLI_ASSOC);
	}
	return $annee;

}
?>