<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Demande de Reprise de Voiture</title>
    <link rel="stylesheet" type="text/css" href="Remise.css">
</head>
<body>
    <h1>Demande de Reprise de Voiture</h1>
    <form action="traitement.php" method="post" enctype="multipart/form-data">
        <label for="nom">Nom et Prénom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="email">Adresse Email :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="tel">Téléphone :</label>
        <input type="tel" id="tel" name="tel" required><br><br>

        <label for="marque">Marque de la Voiture :</label>
        <input type="text" id="marque" name="marque" required><br><br>

        <label for="modele">Modèle de la Voiture :</label>
        <input type="text" id="modele" name="modele" required><br><br>

        <label for="annee">Année de Fabrication :</label>
        <input type="number" id="annee" name="annee" required><br><br>

        <label for="description">Description de la Voiture :</label>
        <textarea id="description" name="description" rows="4" required></textarea><br><br>

    
        <label for="photo">Photo de la Voiture :</label>
        <input type="file" id="photo" name="photo" accept="image/*" required><br><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
