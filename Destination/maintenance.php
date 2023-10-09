<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="maintenance.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Site en Maintenance</title>
    
</head>
<body>
    <span class="stop-sign">⛔</span>
    <h1>Service en Maintenance</h1>
    <p>Nous effectuons actuellement des travaux de maintenance sur notre site web.</p>
    <p>Merci de revenir ultérieurement.</p>
    <a class="back-home" id="returnLink">Retour à la page précédente</a>

    <script>
        // Stocker l'URL précédente dans la session de l'utilisateur
        sessionStorage.setItem('previousPage', document.referrer);

        // Rediriger l'utilisateur vers la page précédente lorsqu'il clique sur le bouton "Retour à la page précédente"
        document.getElementById('returnLink').addEventListener('click', function() {
            var previousPage = sessionStorage.getItem('previousPage');
            if (previousPage) {
                window.location.href = previousPage;
            } else {
                // Si l'URL précédente n'est pas disponible, redirigez vers la page d'accueil par défaut
                window.location.href = 'accueil.php'; 
            }
        });
    </script>
</body>
</html>
