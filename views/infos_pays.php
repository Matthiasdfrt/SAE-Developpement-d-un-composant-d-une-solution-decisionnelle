<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Jouet</title>
</head>
<body>

<h2>Ajouter un Nouveau Jouet</h2>
<form id="form" method="POST" action="../controllers/controller.php">
    <label for="nom_pays">Pays :</label>
    <select name="nom_pays" id="nom_pays" required>
        <option value="">Sélectionner un pays</option>
        <?php foreach ($pays as $pay) {
            echo "<option value='" . $pay['code_pays'] . "'>" . $pay['nom_pays'] . "</option>";
        }?>
    </select>

    <label for="annee">Année :</label>
    <select name="annee" id="annee">
        <option value="">Sélectionner une année</option>
        <?php foreach ($annees as $annee) {
            echo "<option value='" . $annee['annee'] . "'>" . $annee['annee'] . "</option>";
        }?>
    </select>

    <button type="submit">Montrer</button>
</form>

<div id="result">
    <?php
    if (isset($moy)) {
        echo "<table>";
        foreach ($moy as $key => $value) {
            echo "<tr><td>$key :</td><td>$value</td></tr>";
        }
        echo "</table>";
    }
    ?>
</div>
</body>
</html>