
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body class="bg-gray-100">

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

    <h1 class="text-3xl text-center text-gray-900 my-8">Contact</h1>
    <div class="w-full max-w-md mx-auto">
        <form action="" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Votre email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Votre email" name="email">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="Phone">
                Téléphone
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Phone" type="tel" placeholder="Votre Tel" name="phonz">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="subject">
                    Sujet du contact
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="subject" type="text" placeholder="Sujet du contact" name="subject">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="content">
                    Votre message
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="content" placeholder="Votre message" name="content" rows="6"></textarea>
            </div>

            <div class="flex items-center justify-center">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Envoyer
                </button>
            </div>
        </form>
    </div>
</body>

</html>
