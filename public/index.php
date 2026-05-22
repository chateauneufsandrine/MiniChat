<!DOCTYPE html>
<html lang="fr">

<?php include_once '../_partials/_head.php' ?>

<body class="h-screen flex flex-col justify-between">

    <?php include_once '../_partials/_header.php' ?>

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