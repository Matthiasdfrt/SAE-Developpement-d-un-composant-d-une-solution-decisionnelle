<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Jouet</title>
</head>
<body>

<h2>Ajouter un Nouveau Jouet</h2>
<label for="nom_pays">Pays :</label>
    <select name="nom_pays" id="nom_pays" required>
        <option value="">Sélectionner un pays</option>
        <?php foreach ($pays as $pay) {
            echo "<option value='" . $pay['code_pays'] . "'>" . $pay['nom_pays'] . "</option>";
        }?>
    </select>

<label for="annee">Année :</label>
    <select name="annee" id="annee" required>
        <option value="">Sélectionner une année</option>
        <?php foreach ($annees as $annee) {
            echo "<option value='" . $annee['id'] . "'>" . $annee['annee'] . "</option>";
        }?>
    </select>
    <?php
    echo var_dump($moy);
    ?>

</body>
</html>