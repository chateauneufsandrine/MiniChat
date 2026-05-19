<!DOCTYPE html>
<html lang="en">

<?php include_once '../_partials/_head.php' ?>


<body class="h-screen flex flex-col justify-between">

    <header class="bg-[#D7D0C8] flex flex-row h-40 gap-3 py-8 px-8 xl:justify-between">

        <div class="flex flex-row gap-3">
            <img src="../images/Logo-header.png" alt="logo du header" class="h-24">
            <div class="flex flex-col justify-end">
                <h3 class="barriecito-regular text-5xl">Mini Chat</h3>
                <p class="bellota-regular">Discutez avec tout le monde...</p>
            </div>
        </div>
    </header>

    <main class="h-full bellota-bold">

        <section class="bg-[#D9D9D9] flex flex-col gap-3 py-8 h-full items-center xl:items-center xl:gap-8">
            <!-- //////////////////////////////////////////////////////////////////////////////// -->
            <h1 class="text-6xl text-center">Rejoindre MiniChat</h1>

            <!-- /////////////////////////////////////////////////////////////////////////////////////// -->
            <h2 class="hidden xl:flex xl:text-3xl">Choisi un pseudo pour entrer dans la salle de chat</h2>

            <!-- ////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <img src="../images/message-Blur.png" alt="image Blur" class="w-24 xl:hidden">


            <!--MOBILE ///////////////////////////////////////////////////////////////////////////// MOBILE-->
            <div class="flex lex-row items-center gap-2 xl:hidden ">
                <img src="../images/telecharger.png" alt="icône insertion d'images" class="w-12 ">
                <a href="" class="">Insérer une image</a>
            </div>

            <!-- DESKTOP//////////////////////////////////////////////////////////////////// -->

            <div class="hidden xl:flex flex-row xl:gap-8">

                <div class="hidden xl:flex flex-col xl:gap-8"><img src="../images/message-Blur.png" alt="image Blur"
                        class="w-40">
                    <div class="flex lex-row items-center gap-3">
                        <img src="../images/telecharger.png" alt="icône insertion d'images" class="w-12">
                        <a href="" class="flex">Insérer une image</a>
                    </div>
                </div>


                <div class="flex flex-col py-4 text-center px-8 gap-8 justify-end">
                    <h2 class="text-center text-3xl">Ton pseudo</h2>
                    <a href="" class="bg-[#D7D0C8] rounded-full text-[#6B6B6B] 
        text-2xl font-extralight px-6 py-2 bellota-regular">ex : Sophie42...</a>
                    <a href="" class="bg-[#1D3354] rounded-full text-white 
        text-2xl font-extralight px-6 py-2 bellota-regular">Entrez dans le chat</a>
                </div>
            </div>
            <!-- /////////////////////////////////////////////////////// -->


            <!-- //////////////////MOBILE//////////////////         -->
            <h2 class="text-xl text-center xl:hidden">Choisi un pseudo pour entrer dans la salle de chat</h2>
            <a href="" class="bg-[#D7D0C8] rounded-full text-[#6B6B6B] 
        text-2xl font-extralight px-6 py-2 bellota-regular xl:hidden">ex : Sophie42...</a>
            <a href="" class="bg-[#1D3354] rounded-full text-white 
        text-2xl font-extralight px-6 py-2 bellota-regular xl:hidden">Entrez dans le chat</a>



        </section>


    </main>

    <footer class="bg-[#467599] h-40 flex flex-row items-center justify-center xl:hidden"></footer>

    <footer class="hidden xl:flex bg-[#6F5060] h-40 flex-row items-center justify-baseline gap-8 py-8 px-8">
<h3 class="barriecito-regular text-4xl">Participants</h3>

<div class="flex flex-col items-center bellota-regular gap-2"><img src="../images/message-Ayumu.png" alt="" class="w-24">
<p>Ayumu</p></div>

<div class="flex flex-col items-center bellota-regular gap-2"><img src="../images/message-Blur.png" alt="" class="w-24">
<p>Blur</p></div>

<div class="flex flex-col items-center bellota-regular gap-2"><img src="../images/Chatter4.png" alt="" class="w-24">
<p>PandaCraft</p></div>



    </footer>

</body>



</html>