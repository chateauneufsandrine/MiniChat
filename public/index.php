<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniChat</title>
    <link rel="stylesheet" href="../style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barriecito&family=Bellota:wght@400;700&display=swap" rel="stylesheet">
</head>

<body class="h-screen flex flex-col justify-between">

    <header class="bg-[#D7D0C8] flex flex-row h-40 gap-3 py-8 px-8 xl:justify-between">

        <div class="flex flex-row gap-3">
            <img src="../images/Logo-header.png" alt="logo du header" class="h-24">
            <div class="flex flex-col justify-end">
                <h3 class="barriecito-regular text-5xl">Mini Chat</h3>
                <p class="bellota-regular">Discutez avec tout le monde...</p>
            </div>
        </div>

        <a href="inscription.php" class="sm:hidden bg-[#1D3354] rounded-full
          text-white text-3xl font-extralight px-6 py-2 xl:flex xl:items-center ">
            S'inscrire
        </a>
    </header>

    <main class="h-full ">
        <section class="bg-[#D9D9D9] flex flex-col gap-8 pt-4 h-full xl:items-center">
            <img src="../images/Le-gros-chat.png" alt="image d'accueil avec le chat" class="xl:w-136">
            <h1 class="bellota-bold text-6xl text-center xl:text-8xl">Bienvenue dans le chat !</h1>
            <h2 class="text-4xl text-center bellota-regular">Soyez le premier à envoyer un message</h2>

        </section>
    </main>

    <footer class="bg-[#467599] h-40 flex flex-row items-center justify-center xl:hidden">
        <a href="inscription.php" class="bg-[#1D3354] rounded-full text-white 
        text-3xl font-extralight px-6 py-2 bellota-regular">
            S'inscrire
        </a>
    </footer>

</body>
</html>