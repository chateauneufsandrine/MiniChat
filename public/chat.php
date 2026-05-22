<?php

// echo "Pseudo connecté : " . $_SESSION["pseudo"];

// var_dump($_SESSION);

require_once "../utils/isConnected.php";
require_once "../utils/db_connexion.php";

$request = $db->query("SELECT *
FROM messages
INNER JOIN chatters ON chatters.id = messages.user_id
ORDER BY messages.created_at DESC");

$messages = $request->fetchAll(PDO::FETCH_ASSOC);

$request = $db->query("SELECT * FROM chatters ORDER BY pseudo ASC");

$chatters = $request->fetchAll(PDO::FETCH_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">

<?php include_once '../_partials/_head.php' ?>

<body class="h-screen flex flex-col justify-between pt-34 pb-40 xl:pb-46 selection:bg-fuchsia-300 selection:text-fuchsia-900">

    <header class="bg-[#D7D0C8] fixed top-0 left-0 right-0 flex flex-row items-center gap-3 py-2 pt-4 px-4 ">

        <a href="../public/index.php" class="flex flex-row gap-3 p-2 rounded-xl hover:bg-[#FADADD] transition">
            <img src="../images/Logo-header.png" alt="logo du header" class="h-24">
            <div class="flex flex-col justify-end">
                <h3 class="barriecito-regular text-4xl">Mini Chat</h3>
                <p class="bellota-regular">Discutez avec tout le monde...</p>
            </div>
        </a>

    </header>

    <!-- div de participants et le main -->
    <div class="flex flex-row h-full">


        <!-- main avec le footer -->
        <main class="h-full w-full flex flex-col bellota-bold ">

            <div class="h-full w-full flex flex-row bellota-bold bg-[#F1F5F2] ">


                <section class="hidden xl:flex flex-col xl:py-8 px-8 gap-4 xl:w-1/2">
                    <h1 class="xl:text-4xl">Discutez en temps réel avec votre communauté</h1>
                    <img src="../images/Le-gros-chat.png"
                        alt="image d'accueil un gros chat avec une fillette" class="w-lg">
                </section>


                <!-- CHAT -->
                <div class="flex flex-col-reverse gap-4 py-4 px-4 h-full w-full overflow-y-auto xl:w-1/2">

                    <?php foreach ($messages as $message): ?>

                        <div class="flex flex-row gap-4 items-center">

                            <div class="flex flex-col w-1/5">
                                <img src="<?= $message['photo_profil'] ?>" class="w-12 h-12 rounded-full object-cover md:w-16 md:h-16">
                                <p><?= $message['pseudo'] ?></p>
                            </div>

                            <div class="relative bg-[#dbdbdb] rounded-2xl pt-4 px-4 pb-6 w-full">

                                <p class="text-pretty"><?= $message['message'] ?></p>

                                <p class="absolute bottom-1 right-4 text-xs font-bold font-mono ">
                                    <?= (new DateTime($message['created_at']))->format('d/m/Y H:i')  ?>
                                </p>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>



                <!-- ////////////////////Desktop FOOTER/////////////////Fond message//////////////////////////////////// -->
                <div class="hidden xl:flex bg-[#467599] fixed bottom-0 left-0 right-0 items-center justify-center flex-col px-8 py-4 ">


                    <form action="../process/ajout-message.php" method="POST" class="bg-[#D7D0C8] rounded-2xl  w-full py-4 pl-4 flex">
                        <textarea name="message" id="message" maxlength="500" rows="4" class="resize-none w-full focus-visible:border-sky-500" placeholder="Entrez votre message..."></textarea>
                        <button type="submit">
                            <img src="../images/fleche.png" alt="" class="w-16 ">
                        </button>
                    </form>

                    <div class="hidden xl:flex flex-row text-white w-full justify-between ">
                        <div class="flex gap-4">

                            <p><?= $_SESSION['chatter']['pseudo'] ?></p>
                            <a href="../process/disconnect.php" class=" hover:bg-[#FADADD] rounded-xl transition">deconnexion</a>
                        </div>
                        <p>0/500 caractères</p>
                    </div>



                </div>

                <!-- ///////////////////////////////////////////////////////// -->



            </div>

        </main>

        <!-- /////////////////PARTICIPANTS////////BANDEAU/////////////A droite////////////////////// -->
        <section class="hidden xl:flex bg-[#6F5060] h-full overflow-y-auto w-80 flex-col items-center gap-8 py-8 px-8">
            <div class="h-full">
                <h3 class="barriecito-regular text-4xl">Participants</h3>
                <p> <?= count($chatters) ?> Utilisateurs actifs</p>

                <p class="text-bold text-2xl barriecito-regular ">Pseudo connecté : <?= $_SESSION["chatter"]['pseudo'] ?></p>

            </div>


            <?php foreach ($chatters as $chatter): ?>

                <div class="flex flex-col items-center bellota-regular gap-2">
                    <img src="<?= $chatter['photo_profil'] ?>" alt="photo de <?= $chatter['pseudo'] ?>" class="w-16 h-16 rounded-full object-cover ">
                    <p><?= $chatter['pseudo'] ?></p>
                </div>
            <?php endforeach; ?>


            <!-- <div class="flex flex-col items-center bellota-regular gap-2"><img src="../images/message-Ayumu.png" alt="" class="w-24">
                <p>Ayumu</p>
            </div>

            <div class="flex flex-col items-center bellota-regular gap-2"><img src="../images/message-Blur.png" alt="" class="w-24">
                <p>Blur</p>
            </div>

            <div class="flex flex-col items-center bellota-regular gap-2"><img src="../images/Chatter4.png" alt="" class="w-24">
                <p>PandaCraft</p>
            </div> -->

        </section>


    </div>

    <!-- ///////////////////////////////MOBILE FOOTER////////////////////////////////////// -->
    <footer class="bg-[#467599] fixed bottom-0 left-0 right-0  px-4 py-4 xl:hidden">

        <form action="../process/ajout-message.php" method="POST" class="bg-[#D7D0C8] rounded-2xl w-full py-4 pl-4 flex">
            <textarea name="message" id="message" maxlength="500" rows="4" class="resize-none w-full focus-visible:border-sky-500" placeholder="Entrez votre message..."></textarea>
            <button type="submit">
                <img src="../images/fleche.png" alt="" class="w-16  xl:hidden">
            </button>
        </form>

        <!-- <a href="" class="bg-[#D7D0C8] rounded-2xl py-8 px-8 relative  h-40 w-104">
            Entrez votre message...</a>
        <a href=""></a> -->



    </footer>


</body>

</html>