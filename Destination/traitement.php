<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $marque = $_POST["marque"];
    $modele = $_POST["modele"];
    $annee = $_POST["annee"];
    $description = $_POST["description"];

    // Répertoire de destination pour les fichiers téléchargés
    $uploadDirectory = "uploads/";

    // Vérifier si un fichier image a été téléchargé
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
        
        $photoName = $_FILES["photo"]["name"];
        // Chemin complet du fichier image téléchargé
        $photoPath = $uploadDirectory . $photoName;

        // Déplacer le fichier image vers le répertoire de destination
        if(move_uploaded_file($_FILES["photo"]["tmp_name"], $photoPath)) {

            
            echo "<h2>Récapitulatif :</h2>";
            echo "<p><strong>Nom :</strong> " . $nom . "</p>";
            echo "<p><strong>Email :</strong> " . $email . "</p>";
            echo "<p><strong>Téléphone :</strong> " . $tel . "</p>";
            echo "<p><strong>Marque de la voiture :</strong> " . $marque . "</p>";
            echo "<p><strong>Modèle de la voiture :</strong> " . $modele . "</p>";
            echo "<p><strong>Année de fabrication :</strong> " . $annee . "</p>";
            echo "<p><strong>Description :</strong> " . $description . "</p>";
            echo "<p><strong>Image :</strong> <img src='" . $photoPath . "' alt='Image de la voiture'></p>";
        } else {
            echo "<p>Erreur lors de l'upload de l'image.</p>";
        }
    } else {
        echo "<p>Aucune image téléchargée.</p>";
    }
} else {
    // Redirection en cas d'accès direct à ce fichier
    header("Location: index.php");
}
?>
