<?php
session_start();

require_once "../utils/db_connexion.php";

// on commence par préparer la requète grace à prepare()(requête avec variable)
$request =  $db->query('SELECT * FROM chatters');
// on récupère la réponse à la requète grâce à fetchAll(), 
$chatters = $request->fetchAll(PDO::FETCH_ASSOC);
// var_dump($chatters);
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once '../_partials/_head.php' ?>


<body class="h-screen flex flex-col justify-between">

    <header class="bg-[#D7D0C8] flex flex-row h-40 gap-3 py-8 px-8 xl:justify-between">

        <a href="../public/index.php" class="flex flex-row gap-3 p-2 rounded-xl hover:bg-[#FADADD] transition">
            <img src="../images/Logo-header.png" alt="logo du header" class="h-24">
            <div class="flex flex-col justify-end">
                <h3 class="barriecito-regular text-5xl">Mini Chat</h3>
                <p class="bellota-regular">Discutez avec tout le monde...</p>
            </div>
        </a>
    </header>

    <main class="h-full bellota-bold">

        <section class="bg-[#D9D9D9] flex flex-col gap-3 py-8 h-full items-center xl:gap-8">
            <!-- //////////////////////////////////////////////////////////////////////////////// -->
            <h1 class="text-6xl text-center">Rejoindre MiniChat</h1>

            <!-- /////////////////////////////////////////////////////////////////////////////////////// -->
            <h2 class="text-2xl text-center sm:text-3xl xl:text-4xl">Choisi un pseudo pour entrer dans la salle de chat</h2>

            <form enctype="multipart/form-data" class="flex flex-col gap-8 xl:flex-row" action="../process/ajout-chatter.php" method="post">

                <div class="flex flex-col items-center gap-3">

                    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////// -->

                    <input type="file" name="photo-profil" id="photo-profil" accept="image/png, image/jpeg, image/webp" class="hidden">

                    <!--MOBILE ///////////////////////////////////////////////////////////////////////////// MOBILE-->

                    <label for="photo-profil" class="text-2xl flex flex-col gap-2 items-center">
                        <img src="../images/message-Blur.png" alt="image Blur" class="w-24 h-24 rounded-full object-cover aspect-square" id="preview">
                        <div class="flex gap-2 items-center">

                            <img src="../images/telecharger.png" alt="icône insertion d'images" class="w-12 ">
                            Insérer une image
                        </div>
                    </label>

                </div>

                <div class="flex flex-col items-center gap-3 ">
                    <label for="pseudo" class="text-2xl">Ton pseudo :</label>
                    <input type="text" name="pseudo" id="pseudo" class="bg-[#D7D0C8] rounded-full text-[#6B6B6B] text-2xl font-extralight px-6 py-2 bellota-regular w-full" placeholder="ex : Sophie42...">

                    <button type="submit" class="bg-[#1D3354] rounded-full text-white text-2xl font-extralight px-6 py-2 bellota-regular w-full  hover:bg-[#FADADD] transition">Entrez dans le chat</button>

                </div>
            </form>

        </section>


    </main>

    <!-- <footer class="bg-[#467599] h-40 flex flex-col items-center justify-center xl:hidden"></footer> -->
    <footer class="flex flex-col bg-[#6F5060] items-center justify-baseline gap-8 py-8 px-8 sm:flex-row">
        <h3 class="barriecito-regular text-4xl">Participants</h3>

        <?php foreach ($chatters as $chatter): ?>

            <div class="flex flex-col items-center bellota-regular gap-2">
                <img src="<?= $chatter['photo_profil'] ?>" alt="photo de <?= $chatter['pseudo'] ?>" class="w-24 h-24 rounded-full object-cover">
                <p><?= $chatter['pseudo'] ?></p>
            </div>

        <?php endforeach; ?>



    </footer>

    <script>
        let input = document.querySelector("#photo-profil");
        let preview = document.querySelector("#preview");

        input.addEventListener("change", function() {
            let file = this.files[0];
            if (file) {
                preview.src = URL.createObjectURL(file);
            }
        });
    </script>

</body>



</body>



</html>