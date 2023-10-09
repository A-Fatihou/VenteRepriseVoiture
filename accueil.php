<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Mon Premier Site Web en PHP | Accueil</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<header>
    <div class="nav-container">
        <a href="accueil.php">
            <img src="https://cdn.discordapp.com/attachments/816311961158418452/1159440101256986644/image.png?ex=653107bd&is=651e92bd&hm=f1ffe1813005791eea467c76a6ddaffc6d19cb1d3d1eb30b66387273a1f05c81&" alt="Logo" class="logo">
        </a>
        <div>
            <h1>GCARS, garage automobile à Épinay-sur-Seine</h1>
            <a href="accueil.php">Accueil</a>
            <a href="contact.php" class="nav-item">Contact</a>
        </div>
    </div>
</header>

  
    <main>
        <?php
        // Charger les données depuis le fichier JSON
        $imageList = json_decode(file_get_contents('images.json'), true);

        // Parcourir les images et les afficher sous forme de cartes
        foreach ($imageList as $image) :
        ?>
            <div class="image-container">
                <img src="<?php echo $image['chemin']; ?>" alt="<?php echo $image['nom']; ?>" />
                <div class="read-more-button-container">
                    <a href="Destination/page_php_destination_<?php echo $image['id']; ?>.php" class="read-more-button">
                        <?php echo $image['nom']; ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M9.354 1.646a.5.5 0 0 1 .792 0l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L12.793 6H1.5a.5.5 0 0 1 0-1h11.293l-3.147-3.146a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </main>
</body>
</html>
